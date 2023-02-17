<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion\Good\Models;

use Pattern\Solid\Devuz\Dinversion\Good\Interfaces\IKeyboard;

class SimpleKeyboard implements IKeyboard
{

    public function action(): void
    {
        echo "Simple keyword: press button";
    }
}