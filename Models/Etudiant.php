<?php
require_once __DIR__ . '/../Config/db.php';

function getAllEtudiants($pdo) {
    $stmt = $pdo->query('SELECT * FROM etudiant');
    return $stmt->fetchAll();
}

function addetudiant($pdo, $Identifiants, $Nom, $Prenom, $Adresse_Mail) {
    $stmt = $pdo->prepare('INSERT INTO etudiant (Identifiants, Nom, Prenom, Adresse_Mail) VALUES (:Identifiants, :Nom, :Prenom, :Adresse_Mail)');
    $stmt->execute(['Identifiants' => $Identifiants, 'Nom' => $Nom, 'Prenom' => $Prenom, 'Adresse_Mail' => $Adresse_Mail]);
}
