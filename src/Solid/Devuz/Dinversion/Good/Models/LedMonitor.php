<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion\Good\Models;

use Pattern\Solid\Devuz\Dinversion\Good\interfaces\IMonitor;

class LedMonitor implements IMonitor
{

    public function action(): void
    {
        echo "Simple: Led showing";
    }
}