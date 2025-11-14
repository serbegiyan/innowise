<?php

namespace App;

class Database
{
    private PDO $pdo;
    /**
     * @param array{host: string, port: string, dbname: string, user: string, password: string} $config
     */
    public function __construct(array $config)
    {
        $dsn = "pgsql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
        $this->pdo = new PDO($dsn, $config['user'], $config['password']);
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
