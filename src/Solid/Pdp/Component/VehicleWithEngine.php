<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Component;

use Pattern\Solid\Pdp\Interrfaces\Vehicle as VehicleAlias;

abstract class VehicleWithEngine implements VehicleAlias
{

    public bool $isWorking = false;

    public function startEngine()
    {
    }

    public function stopEngine()
    {
    }
}