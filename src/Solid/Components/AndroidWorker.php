<?php

declare(strict_types=1);

namespace Pattern\Solid\Components;

use Pattern\Solid\Interfaces\ManageableInterface;
use Pattern\Solid\Interfaces\WorkableInterface;

class AndroidWorker implements WorkableInterface, ManageableInterface
{

    public function beManaged()
    {
        $this->work();
    }

    public function work()
    {
        // TODO
    }
}