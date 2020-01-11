<?php

namespace App\Providers;

use Canvas\Canvas;
use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

class CanvasServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        Canvas::night();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $schedule = resolve(Schedule::class);
            $schedule->command('canvas:digest')
                ->weekly()
                ->mondays()
                ->timezone(config('app.timezone'))
                ->at('08:00')
                ->when(function () {
                    return config('canvas.digest.enabled');
                });
        });
    }
}
