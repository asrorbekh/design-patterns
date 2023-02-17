<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

class UserBad
{
    public int $id;
    public string $name;

    public string $password;

    public function signIn()
    {
    }

    public function signOut()
    {
    }
}