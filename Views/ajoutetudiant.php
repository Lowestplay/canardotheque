<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Etudiant - Canardothèque</title>
</head>
<body>
    <h1>Ajouter un nouveau etudiant</h1>

    <nav>
        <a href="index.php?action=ajouteretudiant">Ajouter un canard</a> |
        <a href="index.php?action=etudiantliste">Liste des etudiants</a> |
        <a href="index.php?action=canardliste">Liste des canards</a> |
        <a href="index.php">Accueil</a>
    </nav>

    <hr>

    <?php if (!empty($message)): ?>
        <p><strong><?= htmlspecialchars($message) ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="index.php?action=ajouteretudiant">
        <p>
            <label for="identifiants">Identifiants de l'étudiant :</label><br>
            <input type="text" id="identifiants" name="Identifiants" required placeholder="Ex : 123">
        
        <p>
            <label for="nom">Nom de l'étudiant :</label><br>
            <input type="text" id="nom" name="Nom" required placeholder="Ex : Dupont">
        </p>

        <p>
            <label for="prenom">Prénom de l'étudiant :</label><br>
            <input type="text" id="prenom" name="Prenom" required placeholder="Ex : Jean">
        </p>

        <p>
            <label for="adresse_mail">Adresse mail de l'étudiant :</label><br>
            <input type="email" id="adresse_mail" name="Adresse_Mail" required placeholder="Ex : jean.dupont@univ-lyon1.fr">
        </p>

        <p>
            <button type="submit">Ajouter l'étudiant</button>
        </p>
    </form>
</body>
</html>