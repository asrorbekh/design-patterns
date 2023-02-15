<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Interfaces\DatabaseInterface;

class PasswordReminder
{
    private $mysql;

    public function __construct(DatabaseInterface $connection)
    {
        $this->mysql = $connection;
    }
}