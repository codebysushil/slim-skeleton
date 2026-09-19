<?php

declare(strict_types=1);

namespace Slim\App\Config;

use PDO;
use PDOException;
use RuntimeException;

final class Database
{
    private readonly string $driver;

    private readonly string $host;

    private readonly int $port;

    private readonly string $dbname;

    private readonly string $charset;

    private readonly string $username;

    private readonly string $password;

    public function __construct()
    {
        $this->driver = $this->env('DB_DRIVER', 'mysql');

        $this->host = $this->env('DB_HOST', '127.0.0.1');

        $this->port = (int) $this->env('DB_PORT', '3306');

        $this->dbname = $this->env('DB_NAME', 'slim');

        $this->charset = $this->env('DB_CHARSET', 'utf8mb4');

        $this->username = $this->env('DB_USERNAME', 'root');

        $this->password = $this->env('DB_PASSWORD', '');
    }

    public function getConnection(): PDO
    {
        $dns = sprintf(
            '%s:host=%s;port=%d;dbname=%s;charset=%s',
            $this->driver,
            $this->host,
            $this->port,
            $this->dbname,
            $this->charset
        );

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            return new PDO(
                $dns,
                $this->username,
                $this->password,
                $options
            );
        } catch (PDOException $e) {
            throw new RuntimeException(
                'Database Connection failed.',
                0,
                $e
            );
        }
    }

    private function env(
        string $key,
        ?string $default = null
    ): string {
        if (function_exists('getenv')) {
            $value = getenv($key);

            if ($value !== false && $value !== '') {
                return $value;
            }
        }

        if (isset($_ENV[$key]) && $_ENV[$key] !== '') {
            return (string) $_ENV[$key];
        }

        return $default ?? '';
    }
}
