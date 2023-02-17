<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Services;

class TemporaryEmployee extends Employee
{

    public function calculateBonus(int $salary): float|int
    {
        return $salary * 0.10;
    }
}