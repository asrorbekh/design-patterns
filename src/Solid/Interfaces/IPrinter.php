<?php

namespace Pattern\Solid\Interfaces;

use Pattern\Solid\Components\Document;

interface IPrinter
{
    public function print(Document $d);

}