<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov\Good;

class FlyBird extends Bird
{
    public function fly()
    {
        echo "I am flying";
    }
}