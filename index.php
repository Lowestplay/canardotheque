<?php
$action = $_GET['action'] ?? 'accueil';
switch ($action) {
    case 'canardliste':
        require_once 'Controllers/CanardController.php';
        canardliste();
        break;

    case 'accueil':
    default:
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Canardothèque</title>
        </head>
        <body>
            <h1>Bienvenue à la Canardothèque</h1>
            <nav>
                <ul>
                    <li><a href="index.php?action=canardliste">Liste des Canards</a></li>
                </ul>
            </nav>

        </body>
        </html>
        <?php 
        break;
}
