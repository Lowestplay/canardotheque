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
        <?php foreach ($canards as $canard): ?>
            <tr>
                <td><?= htmlspecialchars($canard['Nom_C']) ?></td>
                <td><?= htmlspecialchars($canard['Type']) ?></td>
                <td><?= htmlspecialchars($canard['Etat']) ?></td>
            </tr>
            <td> test </td>
        <?php endforeach; ?>
    </tbody>
</table>