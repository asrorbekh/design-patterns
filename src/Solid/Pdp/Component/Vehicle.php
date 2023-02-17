<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Component;

abstract class Vehicle
{
    protected bool $isWorking = false;

    public function startEngine()
    {
    }

    public function stopEngine()
    {
    }

    public function moveForward()
    {
    }

    public function moveBack()
    {
    }

}