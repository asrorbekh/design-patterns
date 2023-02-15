<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Interfaces\ManageableInterface;

class Captain
{
    public function hire(ManageableInterface $worker)
    {
        $worker->beManaged();

    }
}