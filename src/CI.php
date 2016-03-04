<?php
namespace Laradic\CI\Core;

use Laradic\Support\Filesystem;

class CI
{
    /** @var \Laradic\Support\Filesystem  */
    protected $fs;

    public function __construct(Filesystem $fs)
    {
        $this->fs = $fs;
    }

    public function fs()
    {
        return $this->fs;
    }
}
