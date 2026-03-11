<?php
// views/emprunts/creer.php - Formulaire d'emprunt (adoption temporaire)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un Emprunt - Canardothèque</title>
</head>
<body>
    <h1>Emprunter un canard</h1>

    <nav>
        <a href="index.php?action=liste_canards">Canards</a> |
        <a href="index.php?action=liste_etudiants">Étudiants</a> |
        <a href="index.php">Accueil</a>
    </nav>

    <hr>

    <?php if (!empty($message)): ?>
        <p><strong><?= htmlspecialchars($message) ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="index.php?action=emprunt">
        <p>
            <label for="Nom">Canard à emprunter :</label><br>
            <select id="Nom" name="Nom" required>
                <option value="">-- Choisir un canard --</option>
                <?php if (!empty($canards_disponibles)): ?>
                    <?php foreach ($canards_disponibles as $canard): ?>
                        <option value="<?= htmlspecialchars($canard['nom']) ?>"
                            <?php if (!empty($canard_nom_preselect) && $canard_nom_preselect == $canard['nom']): ?> selected<?php endif; ?>>
                            <?= htmlspecialchars($canard['nom']) ?> (<?= htmlspecialchars($canard['type']) ?>)
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </p>

        <p>
            <label for="Identifiants">Étudiant emprunteur :</label><br>
            <select id="identifiants" name="identifiants" required>
                <option value="">-- Choisir un étudiant --</option>
                <?php if (!empty($etudiants)): ?>
                    <?php foreach ($etudiants as $etudiant): ?>
                        <option value="<?= htmlspecialchars($etudiant['Identifiants']) ?>">
                            <?= htmlspecialchars($etudiant['Prenom']) ?> <?= htmlspecialchars($etudiant['Nom']) ?> (<?= htmlspecialchars($etudiant['id_etud']) ?>)
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </p>

        <p>
            <label for="date_du_pret">Date de retour prévue :</label><br>
            <input type="date" id="date_du_retour" name="date_du_retour" required min="<?= date('Y-m-d') ?>">
        </p>

        <p>
            <em>La date d'emprunt sera automatiquement définie à aujourd'hui (<?= date('d/m/Y') ?>).</em>
        </p>

        <p>
            <button type="submit">Valider l'emprunt</button>
        </p>
    </form>
</body>
</html>