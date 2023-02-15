<?php

namespace Pattern\Solid\Interfaces;

interface DatabaseInterface
{
    public static function getFactory();

    public function connect();

    public function __destruct();
}