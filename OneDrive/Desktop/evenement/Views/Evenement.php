<h1>Liste des événements</h1>

<?php if (!empty($evenements)): ?>
    <ul>
        <?php foreach ($evenements as $event): ?>
            <li>
                <h3><?= htmlspecialchars($event['titre']) ?></h3>
                <p><?= htmlspecialchars($event['description']) ?></p>
                <small>Date : <?= $event['date_event'] ?></small><br>
                <small>Lieu : <?= $event['lieu'] ?></small>
                <hr>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun événement disponible.</p>
<?php endif; ?>
