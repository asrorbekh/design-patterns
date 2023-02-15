<?php

declare(strict_types=1);

namespace Pattern\Solid\Repository;

use Pattern\Solid\Interfaces\LessonRepoInterface;

class FileLessonRepo implements LessonRepoInterface
{

    public function foo(LessonRepoInterface $lessonRepo): int
    {
        $lessons = $lessonRepo->getAll();

        if ($lessons && is_array($lessons)) {
            return 1;
        }

        return 0;
    }

    public function getAll(): array
    {
        // TODO: Implement getAll() method.
        return [];
    }
}