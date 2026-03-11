<?php
// config/db.php
$dsn = 'mysql:host=localhost;dbname=canardtheque;charset=utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, 'root', '', $options);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}