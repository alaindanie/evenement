<h1>Liste des événements</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Date</th>
    </tr>

    <?php foreach ($events as $e): ?>
        <tr>
            <td><?= $e['id'] ?></td>
            <td><?= $e['titre'] ?></td>
            <td><?= $e['description'] ?></td>
            <td><?= $e['date_event'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
