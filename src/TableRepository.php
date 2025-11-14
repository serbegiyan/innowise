<?php

namespace App;

class TableRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllTables(): array
    {
        $stmt = $this->pdo->query("SELECT id, name FROM users");
        $tables = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tables[] = new Table($row['id'], $row['name']);
        }

        return $tables;
    }
}
