<?php

namespace BoxGrater\Ingredients\Providers;

use Illuminate\Support\ServiceProvider;

class IngredientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__.'/../../../resources/views/ingredients/', 'ingredients');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../../../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    //$this->app->bind('ingredients', 'BoxGrater\Ingredients\Facades\IngredientsFacade');
    }

}
