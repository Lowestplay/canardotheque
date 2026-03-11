<?php

function getAllCanards($pdo) {
    $stmt = $pdo->prepare('SELECT * FROM canard');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
