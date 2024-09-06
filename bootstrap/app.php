<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\AgeChack;

use App\Http\Middleware\CountryChack;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //this is global middleware
            // $middleware->append(AgeChack::class);  

        //This mathod for Group of middleware
            //$middleware->appendToGroup('check1',[
            //    AgeChack::class,
            //    CountryChack::class,
            //]);
            //$middleware->appendToGroup('check2',[
            //    AgeChack::class,
            //    CountryChack::class,
            //]);
            
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
