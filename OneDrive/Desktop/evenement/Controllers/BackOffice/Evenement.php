<h1>Liste des événements</h1>

<a href="admin.php?page=evenement_create">Créer un événement</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Date</th>
        <th>Lieu</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($evenements as $e): ?>
    <tr>
        <td><?= $e['id'] ?></td>
        <td><?= $e['titre'] ?></td>
        <td><?= $e['date_event'] ?></td>
        <td><?= $e['lieu'] ?></td>
        <td>
            <a href="admin.php?page=evenement_edit&id=<?= $e['id'] ?>">Modifier</a>
            <a href="admin.php?page=evenement_delete&id=<?= $e['id'] ?>">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
