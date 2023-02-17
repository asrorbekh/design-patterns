<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Services;

abstract class Employee
{
    public function __construct(private int $id, private string $name)
    {
    }

    abstract public function calculateBonus(int $salary): float|int;
}