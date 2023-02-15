<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Interfaces\AccountInterface;

class FixedDepositAccount implements AccountInterface
{
    private const RATE = 9.5;
    private int|float $balance;

    public function getBalance(): float|int
    {
        return $this->balance;
    }

    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    public function calculateInterest(): float|int
    {
        return self::RATE * $this->balance;
    }


}