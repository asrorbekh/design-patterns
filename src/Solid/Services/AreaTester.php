<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class AreaTester
{

    public function __construct(private readonly Rectangle $rectangle)
    {
    }

    public function testArea($width, $height): float|int
    {
        $this->rectangle->setHeight($width);
        $this->rectangle->setWidth($height);
        return $this->rectangle->area();
    }
}