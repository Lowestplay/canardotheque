<?php
require_once __DIR__ . '/../Config/db.php';

function getallcanardsdispo($pdo) {
    $stmt = $pdo->query('SELECT * FROM canard WHERE Etat = 1');
    return $stmt->fetchAll();
}

function addemprunt($pdo, $id_etudiant, $id_canard) {
    $stmt = $pdo->prepare('INSERT INTO emprunt (Id_Etudiant, Id_Canard) VALUES (:id_etudiant, :id_canard)');
    $stmt->execute(['id_etudiant' => $id_etudiant, 'id_canard' => $id_canard]);
    
    // Mettre à jour l'état du canard emprunté
    $updateStmt = $pdo->prepare('UPDATE canard SET Etat = 0 WHERE Id_Canard = :id_canard');
    $updateStmt->execute(['id_canard' => $id_canard]);
}