<?php

namespace App\Exceptions;

class AppException extends \RuntimeException
{
    public function __construct(
        string $message = '',
        private readonly int $statusCode = 422,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $statusCode, $previous);
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
