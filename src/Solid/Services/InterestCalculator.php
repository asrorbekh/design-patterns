<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Interfaces\AccountInterface;

class InterestCalculator
{
    public function calculate(AccountInterface $account)
    {
        return $account->calculateInterest();
    }
}