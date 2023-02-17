<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Liskov\Good;

class Main
{
    public function main()
    {
        $flyBird = new Parrot(1, 2);
        $swimBird = new Penguin(22, 11);

        $this->printLocation($flyBird);
        $this->makeFly($flyBird);
        echo " | ";
        $this->printLocation($swimBird);
        $this->makeSwim($swimBird);
    }

    public function printLocation(Bird $bird)
    {
        $bird->getLocation();
    }

    public function makeSwim(SwimBird $swimBird)
    {
        $swimBird->swim();
    }

    public function makeFly(FlyBird $flyBird)
    {
        $flyBird->fly();
    }
}