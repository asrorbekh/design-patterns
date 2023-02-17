<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;


use RuntimeException;

class UserRequest
{
    public static array $rules = [
        'name' => 'string',
        'email' => 'string'
    ];

    public static function validate($data): void
    {
        foreach (static::$rules as $property => $type) {
            if (gettype($data[$property]) !== $type) {
                throw new RuntimeException(
                    "User property $property must be type of $type. Now " . gettype($data[$property]) . " given"
                );
            }
        }
    }
}