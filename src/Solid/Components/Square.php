<?php

declare(strict_types=1);

namespace Pattern\Solid\Components;

use Pattern\Solid\Interfaces\ShapeInterface;

class Square implements ShapeInterface
{
    public function __construct(public int|float $width, public int|float $height)
    {
    }

    public function area(): int
    {
        return $this->height * $this->width;
    }
}