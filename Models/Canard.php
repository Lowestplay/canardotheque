<?php
require_once __DIR__ . '/../Config/db.php';

function getAllCanards($pdo) {
    $stmt = $pdo->query('SELECT * FROM canard');
    return $stmt->fetchAll();
}
