<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerRedirect
{
    public function handle(Request $request, Closure $next)
    {

        if (request()->is('seller/*') || request()->is('seller')) {
            if (! request()->is('seller/login')) {
                if (! Auth::guard('seller')->check()) {
                    return redirect()->route('seller.login');
                }
            }
        }

        return $next($request);
    }
}
