<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model;

class ShapeBad
{
    private string $type;

    public function shape(string $type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}