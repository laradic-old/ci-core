<?php
namespace Laradic\CI\Core\Providers;

use Illuminate\Routing\Router;

class RouteServiceProvider extends \Illuminate\Foundation\Support\Providers\RouteServiceProvider
{
    protected $namespace = 'Laradic\\CI\\Core\\Http\\Controllers';

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function () {
            require __DIR__ . '/../Http/routes.php';
        });
    }
}
