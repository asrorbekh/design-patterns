<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class Json
{
    public static function form($data)
    {
        return json_encode($data);
    }
}