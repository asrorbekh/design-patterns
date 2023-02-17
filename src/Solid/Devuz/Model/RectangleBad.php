<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model;

class RectangleBad extends ShapeBad
{
    public function rectangle()
    {
        return $this->getType();
    }
}