<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->uuid('checkout_session_id')->nullable()->after('bag_id');
            $table->foreign('checkout_session_id')->references('id')->on('checkout_sessions')->onDelete('cascade');

            $table->unique('checkout_session_id');
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->dropIndex(['provider_payment_id']);
            $table->unique(
                ['provider', 'provider_payment_id'],
                'payments_provider_provider_payment_id_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['checkout_session_id']);
            $table->dropUnique(['checkout_session_id']);
            $table->dropColumn('checkout_session_id');
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->dropUnique('payments_provider_provider_payment_id_unique');
            $table->index(['provider_payment_id']);
        });
    }
};
