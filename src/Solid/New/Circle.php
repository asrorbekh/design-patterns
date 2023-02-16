<?php

declare(strict_types=1);

namespace Pattern\Solid\New;

use Pattern\Solid\New\Interfaces\Shape;

class Circle implements Shape
{
    public $radius;

    public function area(): float|int
    {
        return ($this->radius * $this->radius) * M_PI;
    }
}