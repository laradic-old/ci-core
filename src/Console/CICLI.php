<?php
namespace Laradic\CI\Core\Console;

use Illuminate\Console\Application;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;

class CICLI extends Application
{
    protected $name;
    public function __construct(Container $laravel, Dispatcher $events, $version)
    {
        $fakeEvents = new \Illuminate\Events\Dispatcher();
        parent::__construct($laravel, $fakeEvents, $version);
        $this->setName('Laradic CI');
        $events->fire(CICLIStarting::class);

    }
}
