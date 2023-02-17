<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion\Good\Services;

use Pattern\Solid\Devuz\Dinversion\Good\interfaces\IKeyboard;
use Pattern\Solid\Devuz\Dinversion\Good\interfaces\IMonitor;

class PersonalComputer
{
    public function __construct(private IMonitor $monitor,private IKeyboard $keyboard)
    {
    }

    public function start()
    {
        $this->keyboard->action();
        $this->monitor->action();
    }

}