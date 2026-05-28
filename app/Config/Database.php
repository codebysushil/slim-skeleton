<?php

declare(strict_types=1);

namespace Slim\App\Config;

use Throwable;

final class Database
{
    public $db;

    private string $host = '127.0.0.1';

    private string $username = 'root';

    private string $password = '';

    private string $database = 'slim';

    public function __construct()
    {
        $this->db = null;
        try {
            $this->db = new mysqli(hostname: $this->host, username: $this->username, password: $this->password, database: $this->database);
        } catch (Throwable $th) {
            throw $th;
        }
    }
}
