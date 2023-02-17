<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model\Good;

class Rectangle extends Shape
{
    public function rectangle()
    {
        return $this->getType();
    }

    public function draw()
    {
        return 'Rectangle';
    }
}