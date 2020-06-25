<?php
namespace App\Exceptions;
use App\Exceptions\InvalidEntrySlugException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
    ];
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof InvalidEntrySlugException)
        {
            return $exception->render();
        }
        return parent::render($request, $exception);
    }
}
