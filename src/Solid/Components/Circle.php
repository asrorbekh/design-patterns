<?php

declare(strict_types=1);

namespace Pattern\Solid\Components;

use Pattern\Solid\Interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
    public function __construct(public int|float $radios)
    {
    }


    public function area(): float|int
    {
        return $this->radios * $this->radios * M_PI;
    }
}