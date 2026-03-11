<h2>Liste de la Canardothèque</h2>

<table border="1">
    <thead>
        <tr>
            <th>Identifiants</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse mail</th>
        </tr>
    </thead>
    <tbody>
            <nav>
        <a href="index.php?action=etudiantliste">Liste des Canards</a> |
        <a href="index.php?action=ajoutercanard">Ajouter un canard</a> |
        <a href="index.php?action=ajouteretudiant">Ajouter un etudiant</a> |
        <a href="index.php">Accueil</a>
        </nav>
        <?php foreach ($etudiant as $etudiant): ?>
            <tr>
                <td><?= htmlspecialchars($etudiant['Identifiants']) ?></td>
                <td><?= htmlspecialchars($etudiant['Nom']) ?></td>
                <td><?= htmlspecialchars($etudiant['Prenom']) ?></td>
                <td><?= htmlspecialchars($etudiant['Adresse_Mail']) ?></td>
            </tr>            
        <?php endforeach; ?>
    </tbody>
</table>