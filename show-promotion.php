<?php
require 'app/models/promotion.php';

require 'partials/head.php';

$promotion = new Promotion();
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Libelle</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($promotion->all() as $promotion): ?>
        <tr>
            <td><?= $promotion['id'] ?></td>
            <td><?= $promotion['libelle'] ?></td>
            <td>
                <a href="update-promotion.php?id=<?= $promotion['id'] ?>">Modifier</a>
                <a class="text-danger" href="delete-promotion.php?id=<?= $promotion['id'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>
</body>
</html>