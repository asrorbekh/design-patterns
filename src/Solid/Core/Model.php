<?php

declare(strict_types=1);

namespace Pattern\Solid\Core;

use PDOException;

class Model
{
    public ?object $database;
    public ?string $error;
    public ?object $query;
    public mixed $response;

    public function __construct()
    {
        $this->response = false;
        $connect = new Database();
        if ($connect) {
            $this->database = $connect::$database;
        }
    }

    public function query(string $sql, array $data = []): void
    {
        try {
            if ($this->database) {
                if (property_exists($this->database, 'error')) {
                    $this->error = $this->database->error->message;
                } else {
                    if (array_key_exists(':indexes', $data) && $data[':indexes']) {
                        $data[':indexes'] = implode(',', $data[':indexes']);
                        $sql = str_replace(':indexes', $data[':indexes'], $sql);
                        unset($data[':indexes']);
                    }

                    $this->query = $this->database->prepare($sql);
                    if ($this->query) {
                        $this->query->execute($data);
                    }
                }
            } else {
                $this->error = 'Failed to connect database';
            }
        } catch (PDOException $exception) {
            dd($exception);
        }
    }

    public function record()
    {
        if (isset($this->error) && $this->error) {
            return $this->error;
        }

        if (isset($this->query) && $this->query) {
            return $this->query->fetch();
        }

        return false;
    }

    public function records()
    {
        if (isset($this->error) && $this->error) {
            return $this->error;
        }

        if (isset($this->query) && $this->query) {
            return $this->query->fetchAll();
        }

        return false;
    }

    public function getLastInsertId()
    {
        if (isset($this->error) && $this->error) {
            return $this->error;
        }

        $this->response = $this->database->lastInsertId();
        if ($this->response && is_numeric($this->response)) {
            return $this->response;
        }

        return false;
    }
}