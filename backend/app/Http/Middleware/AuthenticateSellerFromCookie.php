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
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
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
                $request->setUserResolver(fn () => $seller);
                Auth::guard('seller')->setUser($seller);
                $authenticated = true;
            }
        }

        if (! $authenticated) {
            $token = PersonalAccessToken::findToken($request->bearerToken());
            if ($token && $token->tokenable instanceof Seller) {
                Auth::guard('seller')->setUser($token->tokenable);
                $request->setUserResolver(fn () => $token->tokenable);
                $authenticated = true;
            }
        }

        if (! $authenticated) {
            return response()->json(['message' => 'Kimlik doğrulaması yapılmamış.'], 401);
        }

        return $next($request);
    }
}
