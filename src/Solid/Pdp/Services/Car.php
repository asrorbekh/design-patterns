<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Services;

use Pattern\Solid\Pdp\Component\Vehicle;
use Pattern\Solid\Pdp\Component\VehicleWithEngine;

class Car extends VehicleWithEngine
{
    public function startEngine()
    {
        $this->isWorking = true;
        return "Engine started";
    }

    public function stopEngine()
    {
        $this->isWorking = false;
        return "Engine stopped";
    }

    public function moveForward()
    {
        // TODO: Implement moveForward() method.
    }

    public function moveBack()
    {
        // TODO: Implement moveBack() method.
    }
}