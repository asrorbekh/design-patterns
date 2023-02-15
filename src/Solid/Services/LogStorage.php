<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class LogStorage
{
    public function __construct(private $fileName)
    {
    }

    public function save($text): void
    {
        $fp = fopen($this->fileName, 'wb');
        fwrite($fp, $text);
        fclose($fp);
    }
}