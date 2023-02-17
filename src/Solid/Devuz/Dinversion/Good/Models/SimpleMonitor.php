<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion\Good\Models;

use Pattern\Solid\Devuz\Dinversion\Good\Interfaces\IMonitor;

class SimpleMonitor implements IMonitor
{

    public function action(): void
    {
        echo "Simple: showing";
    }
}