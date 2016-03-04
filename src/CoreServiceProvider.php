<?php

namespace Laradic\CI\Core;

use Laradic\Support\ServiceProvider;

/**
* The main service provider
*
* @author        Robin Radic
* @copyright  Copyright (c) 2015, Laradic
* @license      http://mit-license.org MIT
*/
class CoreServiceProvider extends ServiceProvider
{
    protected $dir = __DIR__;

    protected $configFiles = [ 'ci' ];

    protected $providers = [
        Providers\DevelopmentServiceProvider::class
    ];

    protected $commands = [
        // Commands\SomeCommand::class
    ];

    protected $bindings = [

    ];

    protected $singletons = [

    ];

    protected $aliases = [

    ];

    public function boot()
    {
        $app = parent::boot();

        return $app;
    }

    public function register()
    {
        $app = parent::register();

        return $app;
    }
}
