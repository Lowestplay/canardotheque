<?php
require_once __DIR__ . '/../Models/Etudiant.php';
function etudiantliste() {
    global $pdo;
    $etudiant = getAllEtudiants($pdo); 
    require_once __DIR__ . '/../Views/etudiantliste.php';
    exit();
}

function ajouterEtudiant() {
    global $pdo;
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Identifiants = $_POST['Identifiants'];
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Adresse_Mail = $_POST['Adresse_Mail'];
        addetudiant($pdo, $Identifiants, $Nom, $Prenom, $Adresse_Mail);
        header('Location: index.php?action=etudiantliste');
        exit();
    }
    require_once __DIR__ . '/../Views/ajoutetudiant.php';
    exit();
}