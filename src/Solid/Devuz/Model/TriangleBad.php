<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model;

class TriangleBad extends ShapeBad
{
    public function triangle()
    {
        return $this->getType();
    }
}