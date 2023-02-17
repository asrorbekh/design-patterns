<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov\Good;

abstract class Bird
{
    public function __construct(private float $long, private float $lat)
    {
    }

    public function getLocation()
    {
        echo "I am $this->lat, $this->long location";
    }
}
