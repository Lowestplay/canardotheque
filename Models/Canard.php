<?php
require_once __DIR__ . '/../Config/db.php';

function getAllCanards($pdo) {
    $stmt = $pdo->query('SELECT * FROM canard');
    return $stmt->fetchAll();
}

function addcanard($pdo, $nom, $type, $etat) {
    $stmt = $pdo->prepare('INSERT INTO canard (Nom_C, Type, Etat) VALUES (:nom, :type, :etat)');
    $stmt->execute(['nom' => $nom, 'type' => $type, 'etat' => $etat]);
}
