<?php

namespace App\Services\Campaigns;

use App\Models\Campaign;
use App\Services\Campaigns\Handlers\FixedCampaign;
use App\Services\Campaigns\Handlers\PercentageCampaign;
use App\Services\Campaigns\Handlers\XBuyYPayCampaign;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignManager
{
    public function resolveHandler(Campaign $campaign): ?CampaignInterface
    {
        if (! $campaign->is_active) {
            return null;
        }
        $user = auth('user')->user() ?? throw new AuthenticationException('Kullanıcı bulunamadı.');

        return match ($campaign->type) {
            'percentage' => new PercentageCampaign($campaign, $user),
            'fixed' => new FixedCampaign($campaign, $user),
            'x_buy_y_pay' => new XBuyYPayCampaign($campaign, $user),
            default => null,
        };
    }

    public function touchUsage(Campaign $campaign): void
    {
        $query = Campaign::query()->whereKey($campaign->id);

        if ($campaign->usage_limit !== null) {
            $query->where('usage_count', '<', $campaign->usage_limit);
        }

        $affected = $query->update([
            'usage_count' => DB::raw('usage_count + 1'),
        ]);

        if ($affected === 0) {
            if ($campaign->usage_limit !== null) {
                throw new \RuntimeException('Bu kampanya kullanım limitine ulaştı.');
            }

            throw new \RuntimeException('Kampanya kullanımı güncellenemedi.');
        }

        $campaign->refresh();
    }

    public function logUsage(?int $campaignId, int $userId, ?int $orderId, int $discountAmount): void
    {
        if (! $campaignId) {
            return;
        }

        DB::transaction(function () use ($campaignId, $userId, $orderId, $discountAmount) {
            $campaign = Campaign::query()
                ->whereKey($campaignId)
                ->lockForUpdate()
                ->first();

            if (! $campaign) {
                Log::warning('Kampanya kaydı bulunamadığı için usage loglanamadı.', [
                    'campaign_id' => $campaignId,
                    'user_id' => $userId,
                    'order_id' => $orderId,
                ]);

                return;
            }

            $this->touchUsage($campaign);

            $campaign->campaign_usages()->create([
                'user_id' => $userId,
                'order_id' => $orderId,
                'discount_amount' => $discountAmount,
                'total_usage_count' => $campaign->campaign_usages()->where('user_id', $userId)->count(),
            ]);
        });
    }
}
