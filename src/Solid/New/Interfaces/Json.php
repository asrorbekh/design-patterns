<?php

declare(strict_types=1);

namespace Pattern\Solid\New\Interfaces;

class Json implements FileInterface
{
    public function __construct(public string $file)
    {
    }

    public function parse(): void
    {
        try {
            $content = "{}";
            echo json_decode($content, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            dd($e);
        }
    }
}