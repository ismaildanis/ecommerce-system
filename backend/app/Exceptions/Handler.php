<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    public function register(): void
    {
        $this->renderable(function (Throwable $e, $request): ?JsonResponse {
            if (! ($request->expectsJson() || $request->is('api/*'))) {
                return null;
            }

            if ($e instanceof ValidationException) {
                return response()->json([
                    'message' => 'Geçersiz istek.',
                    'errors' => $e->errors(),
                ], 422);
            }

            if ($e instanceof AuthenticationException) {
                return response()->json([
                    'message' => 'Kimlik doğrulaması yapılmamış.',
                ], 401);
            }

            if ($e instanceof HttpExceptionInterface) {
                return response()->json([
                    'message' => $e->getMessage() ?: 'HTTP hatası oluştu.',
                ], $e->getStatusCode());
            }

            return response()->json([
                'message' => config('app.debug')
                    ? $e->getMessage()
                    : 'Sunucu hatası oluştu.',
            ], 500);
        });
    }
}
