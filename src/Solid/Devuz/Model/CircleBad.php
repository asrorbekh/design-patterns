<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model;

class CircleBad extends ShapeBad
{
    public function circle()
    {
        return $this->getType();
    }
}