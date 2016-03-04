<?php
namespace Laradic\CI\Core\Providers;

use Laradic\Support\ServiceProvider;

class DevelopmentServiceProvider extends ServiceProvider
{
    protected $providers = [
        WorkbenchServiceProvider::class,
        \Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
        \Barryvdh\Debugbar\ServiceProvider::class,
        \Sebwite\IdeaMeta\IdeaMetaServiceProvider::class
    ];


    public function boot()
    {

        if ($this->app['config']->get('app.development', false) !== true) {
            return;
        }

        $app = parent::boot();

        return $app;
    }

    public function register()
    {

        if ($this->app['config']->get('app.development', false) !== true) {
            return;
        }

        $app = parent::register();

        return $app;
    }
}
