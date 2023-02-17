<?php

namespace Pattern\Solid\New\Interfaces;

interface FileInterface
{
    public function __construct(string $file);

    public function parse(): void;
}