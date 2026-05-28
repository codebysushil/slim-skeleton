<?php

declare(strict_types=1);

namespace Slim\App\Config;

class Database
{
    public $db;

    try {
        $this->db = new PDO('sqlite:database.sqlite3');
    } catch (\Throwable $th) {
        //throw $th;
    }
}
