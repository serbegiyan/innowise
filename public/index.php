<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../autoload.php';


try {
    /** @var array $config */
    $db = new Database($config);
    $repo = new TableRepository($db->getConnection());

    $tables = $repo->getAllTables();

    /** @var Table[] $tables */
    foreach ($tables as $table) {
        echo "<p>{$table->getName()}</p>";
    }
}
catch (Exception $e) {
    echo "<p>Ошибка: " . $e->getMessage() . "</p>";
}



