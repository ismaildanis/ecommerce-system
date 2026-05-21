<?php

use App\Http\Middleware\SellerRedirect;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'seller.auth' => SellerRedirect::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {

        $exceptions->render(function (ValidationException $e, $request) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'message' => 'Geçersiz istek.',
                    'errors' => $e->errors(),
                ], 422);
            }

            return null;
        });

        $exceptions->render(function (AuthenticationException $e, $request) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'message' => 'Kimlik doğrulaması yapılmamış.',
                ], 401);
            }

            return null;
        });

        $exceptions->render(function (HttpExceptionInterface $e, $request) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'message' => $e->getMessage() ?: 'HTTP hatası oluştu.',
                ], $e->getStatusCode());
            }

            return null;
        });

        $exceptions->render(function (Throwable $e, $request) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'message' => config('app.debug')
                        ? $e->getMessage()
                        : 'Sunucu hatası oluştu.',
                ], 500);
            }

            return null;
        });
    })
    ->create();
