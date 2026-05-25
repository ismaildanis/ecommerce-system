<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    // Laravel 12: Exception handling bootstrap/app.php içinde yapılıyor.
    // withExceptions() callback'i kullanın.
}
