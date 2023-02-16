<?php

declare(strict_types=1);

namespace Pattern\Solid\New;

use Pattern\Solid\New\Interfaces\Shape;

class Square implements Shape
{

    public $height;
    public $width;

    public function area()
    {
        return $this->width * $this->height;
    }
}