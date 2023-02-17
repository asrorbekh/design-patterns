<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

use Pattern\Solid\Pdp\Interrfaces\ShapeInterface;

class Circle implements ShapeInterface
{
    public function __construct(public $radius)
    {
    }

    public function area(): float|int
    {
        return $this->radius * $this->radius * M_PI;
    }

}
