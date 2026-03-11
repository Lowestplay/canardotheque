<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Canard - Canardothèque</title>
</head>
<body>
    <h1>Ajouter un nouveau canard</h1>

    <nav>
        <a href="index.php?action=canardliste">Liste des canards</a> |
        <a href="index.php">Accueil</a>
    </nav>

    <hr>

    <?php if (!empty($message)): ?>
        <p><strong><?= htmlspecialchars($message) ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="index.php?action=ajoutercanard">
        <p>
            <label for="nom">Petit nom du canard :</label><br>
            <input type="text" id="nom" name="nom" required placeholder="Ex : Amiral Bec-Jaune">
        </p>

        <p>
            <label for="type">Type :</label><br>
            <select id="type" name="type" required>
                <option value="">-- Choisir un type --</option>
                <option value= 1>Plastique</option>
                <option value=2>Peluche</option>
                <option value=3>Bouée</option>
            </select>
        </p>

        <p>
            <label for="etat">État initial :</label><br>
            <select id="etat" name="etat" required>
                <option value="Dans la mare">Dans la mare</option>
                <option value="En vadrouille">En vadrouille</option>
                <option value="En nettoyage">En nettoyage</option>
            </select>
        </p>

        <p>
            <button type="submit">Ajouter le canard</button>
        </p>
    </form>
</body>
</html>