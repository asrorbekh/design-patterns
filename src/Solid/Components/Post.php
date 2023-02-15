<?php

declare(strict_types=1);

namespace Pattern\Solid\Components;

use Pattern\Solid\Interfaces\DbConnectionInterface;

class Post
{
    public function __construct(private DbConnectionInterface $connection)
    {
        $this->connection->connect();
    }
}