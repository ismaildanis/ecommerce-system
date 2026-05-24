<?php

namespace App\Http\Middleware;

use App\Models\Seller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateSellerFromCookie
{
    public function handle(Request $request, Closure $next): Response
    {
        $cookie = $request->cookie('seller_token');
        $accessToken = null;
        $plainToken = null;
        $authenticated = false;

        if ($cookie) {
            $cookie = urldecode($cookie);

            if (strpos($cookie, '|') !== false) {
                [$id, $plainToken] = explode('|', $cookie, 2);
                $accessToken = PersonalAccessToken::find($id);
            }

            if ($accessToken && $plainToken && hash_equals($accessToken->token, hash('sha256', $plainToken))) {
                $seller = $accessToken->tokenable;
                if ($seller instanceof Seller) {
                    $seller->withAccessToken($accessToken);
                    Auth::guard('seller')->setUser($seller);
                    $request->setUserResolver(fn () => $seller);
                    $authenticated = true;
                }
            }
        }

        if (! $authenticated) {
            $token = PersonalAccessToken::findToken($request->bearerToken());
            if ($token && $token->tokenable instanceof Seller) {
                $seller = $token->tokenable;
                $seller->withAccessToken($token);
                Auth::guard('seller')->setUser($seller);
                $request->setUserResolver(fn () => $seller);
                $authenticated = true;
            }
        }

        if (! $authenticated) {
            return response()->json(['message' => 'Kimlik doğrulaması yapılmamış.'], 401);
        }

        return $next($request);
    }
}
