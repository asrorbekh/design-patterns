<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov;

use RuntimeException;

class Pinguin extends Bird
{

    public function fly(): void
    {
        throw new RuntimeException('Can\'t fly');
    }

    public function swim(): void
    {
        echo "I am swimming";
    }
}