<?php
$action = $_GET['action'] ?? 'accueil';
switch ($action) {
    case 'canardliste':
        require_once 'Controllers/CanardController.php';
        canardliste();
        break;
    case 'ajoutercanard':
        require_once 'Controllers/CanardController.php';
        ajouterCanard();
        break;
    case 'etudiantliste':
        require_once 'Controllers/EtudiantController.php';
        etudiantliste();
        break;
    case 'ajouteretudiant':
        require_once 'Controllers/EtudiantController.php';
        ajouterEtudiant();
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
                    <li><a href="index.php?action=ajoutercanard">Ajouter un Canard</a></li>
                    <li><a href="index.php?action=etudiantliste">Liste des Etudiants</a></li>
                    <li><a href="index.php?action=ajouteretudiant">Ajouter un Etudiant</a></li>
                </ul>
            </nav>

        </body>
        </html>
        <?php 
        break;
}
