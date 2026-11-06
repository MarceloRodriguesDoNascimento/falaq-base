<?php

<<<<<<< HEAD
=======
use App\Http\Middleware\Authenticate;
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        //
=======
        $middleware->alias([
            'auth' => Authenticate::class,
        ]);
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
