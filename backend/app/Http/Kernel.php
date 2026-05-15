<?php

namespace App\Http;

use App\Console\Commands\ReindexProducts;
use App\Http\Middleware\ApiAuthenticate;
use App\Http\Middleware\AuthenticateFromCookie;
use App\Http\Middleware\AuthenticateSellerFromCookie;
use App\Http\Middleware\DevelopmentOnly;
use App\Http\Middleware\LoginRateLimit;
use App\Http\Middleware\Refund\VerifyWebhookSignature;
use App\Http\Middleware\RegisterRateLimit;
use App\Http\Middleware\SellerRedirect;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middleware = [
        HandleCors::class,

    ];

    protected $middlewareGroups = [
        'web' => [
            SellerRedirect::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
        ],

        'api' => [
            EnsureFrontendRequestsAreStateful::class,
            AuthenticateFromCookie::class,
            AuthenticateSellerFromCookie::class,
            ApiAuthenticate::class,
            'throttle:api',
            SubstituteBindings::class,
        ],

        'dev' => [
            DevelopmentOnly::class,
        ],
    ];

    protected $middlewareAliases = [
        'DevelopmentOnly' => DevelopmentOnly::class,
        'register.limit' => RegisterRateLimit::class,
        'login.limit' => LoginRateLimit::class,
        'verify.refund-webhook' => VerifyWebhookSignature::class,

    ];

    protected $commands = [
        ReindexProducts::class,
    ];
}
