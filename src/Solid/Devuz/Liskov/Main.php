<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov;

class Main
{
    public function main()
    {
        $parrot = new Parrot(1, 2);
        $pinguin = new Pinguin(2, 1);

        $this->make($pinguin);
        $this->make($parrot);
    }

    public function make(Bird $bird)
    {
        $bird->getLocation();
        $bird->fly();
        $bird->swim();
    }
}