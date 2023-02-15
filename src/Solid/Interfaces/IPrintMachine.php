<?php

namespace Pattern\Solid\Interfaces;

use Pattern\Solid\Components\Document;

interface IPrintMachine
{
    public function print(Document $d);

    public function scan(Document $d);

    public function xerox(Document $d);
}