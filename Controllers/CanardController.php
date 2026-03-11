<?php
require_once '../Config/db.php';
require_once '../Models/Canard.php';
$canards = getAllCanards($pdo);
var_dump($canards);
include '../Views/canardliste.php';
