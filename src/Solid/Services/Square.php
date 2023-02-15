<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class Square extends Rectangle
{

    public function setHeight($height): void
    {
        $this->width = $height;
        $this->height = $height;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
        $this->height = $width;
    }
}