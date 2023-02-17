<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model\Good;

class Circle extends Shape
{

    public function circle()
    {
        return $this->getType();
    }

    public function draw()
    {
        return 'Circle is drawing.';
    }
}