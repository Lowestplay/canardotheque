<?php
require_once __DIR__ . '/../Models/Canard.php';
function canardliste() {
    global $pdo;
    $canard = getAllCanards($pdo); 
    require_once __DIR__ . '/../Views/canardliste.php';
    exit();
}