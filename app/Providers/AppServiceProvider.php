<?php

namespace App\Providers;

use App\Http\Controllers\ChatController;
use Illuminate\Support\ServiceProvider;
use Src\SharedInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(SharedInterface::class, function ($app) {
            return new SharedInterface($app->make(ChatController::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
