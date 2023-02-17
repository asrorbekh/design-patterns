<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class User
{

    public mixed $name;
    public mixed $email;

    public function __construct(
        array $data
    ) {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
}