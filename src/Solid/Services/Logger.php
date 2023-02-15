<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use DateTime;

class Logger
{
    private array $logs = [];

    public function add($log): void
    {
        $now = new DateTime();
        $date = $now->format("Y-m-d h:i:s.u");
        $this->logs[] = $date . " : " . $log;
    }

    public function toString($dimiliter = ", "): array|string|null
    {
        if (empty($this->logs)) {
            return "No logs";
        }
        return implode($this->logs, $dimiliter);

    }

    public function reset(): void
    {
        $this->logs = [];
    }

}

