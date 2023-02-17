<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Interfaces\Good;

interface IUser
{
    public function login(): bool;
    public function register(): bool;
}