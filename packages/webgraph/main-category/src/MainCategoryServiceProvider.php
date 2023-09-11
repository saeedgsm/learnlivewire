<?php
namespace Webgraph\MainCategory;

use Illuminate\Support\Facades\Route;

class MainCategoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'maincategories');

        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/webgraph/maincategories'),
            ], 'views');

        }

        if ($this->app->runningInConsole()) {
            // Export the migration
            if (! class_exists('CreateCategoriesTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_categories_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_categories_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }

    }

    public function register()
    {

        //$this->app->make('Categories\MainCategory\MainCategory');
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('config.prefix'),
            'middleware' => config('config.middleware'),
        ];
    }
}
