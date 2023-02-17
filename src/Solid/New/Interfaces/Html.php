<?php

declare(strict_types=1);

namespace Pattern\Solid\New\Interfaces;

class Html implements FileInterface
{

    public function __construct(public string $file)
    {
    }

    public function parse(): void
    {
    }
}