<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov;

abstract class Bird
{
    private string $name;

    public function __construct(private readonly float $long, private readonly float $lat)
    {
    }

    public function getLocation(): void
    {
        echo "I am in $this->long, $this->lat coordinate\n";
    }

    abstract public function fly(): void;

    abstract public function swim(): void;

}