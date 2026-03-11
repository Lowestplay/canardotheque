<?php
require_once __DIR__ . '/../Models/Emprunt.php';

function canarddispoliste() {
    global $pdo;
    $canard = getallcanardsdispo($pdo); 
    require_once __DIR__ . '/../Views/canardliste.php';
    exit();
}

function ajouterEmprunt() {
    global $pdo;
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_etudiant = $_POST['id_etudiant'];
        $id_canard = $_POST['id_canard'];
        addemprunt($pdo, $id_etudiant, $id_canard);
        header('Location: index.php?action=canarddispoliste');
        exit();
    }
    require_once __DIR__ . '/../Views/ajoutemprunt.php';
    exit();
}