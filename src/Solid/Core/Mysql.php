<?php

declare(strict_types=1);

namespace Pattern\Solid\Core;

use Pattern\Solid\Interfaces\DbConnectionInterface;

class Mysql implements DbConnectionInterface
{
    public function connect()
    {
    }
}