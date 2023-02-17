<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Interfaces\Bad;

interface IUser
{
    public function login(): bool;
    public function register(): bool;
    public function logError(): bool;
    public function sendEmail(): bool;
    public function cancelOrder(): bool;
    public function makeMazgi(): bool;

}