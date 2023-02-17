<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion;

class PersonalComputer
{
    public function __construct(private readonly SimpleKeyBoard $keyBoard, private readonly SimpleMonitor $monitor)
    {
    }

    public function start(): void
    {
        $this->keyBoard->action();
        $this->monitor->action();
    }
}