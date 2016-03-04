<?php
namespace Laradic\CI\Core\Console;

class Kernel extends \Illuminate\Foundation\Console\Kernel
{

    /**
     * Get the Artisan application instance.
     *
     * @return \Illuminate\Console\Application
     */
    protected function getArtisan()
    {
        if (is_null($this->artisan)) {
            return $this->artisan = (new CICLI($this->app, $this->events, $this->app->version()))
                ->resolveCommands($this->commands);
        }

        return $this->artisan;
    }
}
