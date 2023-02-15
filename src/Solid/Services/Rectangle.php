<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class Rectangle
{
    protected int|float $width;
    protected int|float $height;

    public function getHeight(): float|int
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function getWidth(): float|int
    {
        return $this->width;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function area(): float|int
    {
        return $this->height * $this->width;
    }
}