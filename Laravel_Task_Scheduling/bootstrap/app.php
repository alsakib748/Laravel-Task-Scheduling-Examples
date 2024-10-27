<?php

use Illuminate\Foundation\Application;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\DeleteInActiveUser;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withSchedule(function(Schedule $schedule){
        $schedule->command(DeleteInActiveUser::class)->everyFiveSeconds();
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
