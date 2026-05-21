<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class InsufficientStockException extends Exception
{
    public function __construct(
        string $message = 'Stokta yeterli ürün yok!'
    ) {
        parent::__construct($message);
    }

    public function render(): JsonResponse
    {
        return response()->json([
            'message' => $this->getMessage(),
        ], 409);
    }
}
