<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

use Pattern\Solid\Pdp\Interrfaces\ShapeInterface;

class Rectangle implements ShapeInterface
{
    public $height;
    public $length;

    public function area(): float|int
    {
        return $this->length * $this->height;
    }
}