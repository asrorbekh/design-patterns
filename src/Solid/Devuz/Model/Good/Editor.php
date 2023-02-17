<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model\Good;

class Editor
{
    public function draw(Shape $shape)
    {
        return $shape->draw();
    }
}