<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov;

use RuntimeException;

class Parrot extends Bird
{

    public function fly(): void
    {
        echo "I am flying";
    }

    public function swim(): void
    {
        throw new RuntimeException('Can\'t swim');
    }
}