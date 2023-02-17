<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Interfaces\AccountInterface;

class SavingAccount implements AccountInterface
{
    private const RATE = 3.0;
    private int|float $balance;
    private int $maturityPeriod = 2;

    public function getBalance(): int|float
    {
        return $this->balance;
    }

    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    public function withdrawal()
    {
    }

    public function calculateInterest(): float|int
    {
        return self::RATE * $this->balance;
    }
}