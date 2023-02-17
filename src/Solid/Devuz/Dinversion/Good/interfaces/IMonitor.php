<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion\Good\interfaces;

interface IMonitor
{
    public function action(): void;
}