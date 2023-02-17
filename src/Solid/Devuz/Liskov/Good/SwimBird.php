<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov\Good;

class SwimBird extends Bird
{
    public function swim()
    {
        echo "Main: I am swimming";
    }
}