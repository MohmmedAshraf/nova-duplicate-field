<?php

namespace OutheBox\DuplicateField;

use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('duplicate-field', __DIR__ . '/../dist/js/field.js');
        });

        $this->app->booted(function () {
            $this->routes();
        });
    }

    public function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova'])
            ->prefix('/nova-vendor/outhebox/nova-duplicate')
            ->group(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
