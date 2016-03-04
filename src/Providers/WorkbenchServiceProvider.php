<?php
namespace Laradic\CI\Core\Providers;

class WorkbenchServiceProvider extends \Sebwite\Workbench\WorkbenchServiceProvider
{
    protected $configStrategy = 'mergeConfigFrom';
}
