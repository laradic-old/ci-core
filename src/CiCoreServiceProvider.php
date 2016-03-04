<?php

namespace Laradic\CiCore;

use Laradic\Support\ServiceProvider;

/**
* The main service provider
*
* @author        Robin Radic
* @copyright  Copyright (c) 2015, Laradic
* @license      http://mit-license.org MIT
*/
class CiCoreServiceProvider extends ServiceProvider
{
    protected $dir = __DIR__;

    protected $configFiles = [ 'laradic.ci-core' ];

    protected $commands = [
        // Commands\SomeCommand::class
    ];

    protected $bindings = [

    ];

    protected $singletons = [

    ];

    protected $aliases = [

    ];

    public function boot(){
        $app = parent::boot();

        return $app;
    }

    public function register(){
        $app = parent::register();

        return $app;
    }
}
