<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use RuntimeException;

class VideoPlayer
{
    public function play(string $file): string
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new RuntimeException('File must be .avi to play!');
        }

        return $file;
    }
}