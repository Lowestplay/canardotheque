<h2>Liste de la Canardothèque</h2>

<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Etat</th>
        </tr>
    </thead>
    <tbody>
            <nav>
        <a href="index.php?action=etudiantliste">Ajouter des etudiants</a> |
        <a href="index.php?action=etudiantliste">Liste des etudiants</a> |
        <a href="index.php?action=canardliste">Liste des canards</a> |
        <a href="index.php">Accueil</a>
    </nav>
        <?php foreach ($canard as $canard): ?>
        <?php 
        if ($canard['Type'] === 1) {
            $canard['Type'] = 'Plastique';
            }
        elseif ($canard['Type'] === 2) {
            $canard['Type'] = 'Peluche';
            }
        else {
            $canard['Type'] = 'Bouée';
            }
            ?>
            <tr>
                <td><?= htmlspecialchars($canard['Nom_C']) ?></td>
                <td><?= htmlspecialchars($canard['Type']) ?></td>
                <td><?= htmlspecialchars($canard['Etat']) ?></td>
            </tr>            
        <?php endforeach; ?>
    </tbody>
</table>