<?php

declare(strict_types=1);

namespace Pattern\Solid\New;

use Pattern\Solid\New\Interfaces\Shape;

class Triangle implements Shape
{
    public $base;
    public $height;

    public function area(): float|int
    {
        return ($this->base * $this->height) / 2;
    }
}