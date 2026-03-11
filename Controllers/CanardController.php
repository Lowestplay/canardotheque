<?php
require_once __DIR__ . '/../Models/Canard.php';
function canardliste() {
    global $pdo;
    $canard = getAllCanards($pdo); 
    require_once __DIR__ . '/../Views/canardliste.php';
    exit();
}

function ajouterCanard() {
    global $pdo;
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'] ?? '';
        $type = $_POST['type'] ?? '';
        $etat = $_POST['etat'] ?? '';
        addcanard($pdo, $nom, $type, $etat);
        header('Location: index.php?action=canardliste');
        exit();
    }
    require_once __DIR__ . '/../Views/ajoutcanard.php';
    exit();
}