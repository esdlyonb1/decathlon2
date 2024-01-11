<h1>Les sports</h1>

<?php foreach ($sports as $sport): ?>

<div class="border border-dark">

    <h2>Name : <?= $sport->getName() ?></h2>
    <p><strong>Description : <?= $sport->getDescription() ?> </strong></p>
    <p>Accessory : <?= $sport->getAccessory() ?> </p>

    <a class="btn btn-primary" href="?type=sport&action=show&id=<?= $sport->getId() ?>">Lien vers le sport</a>
    <a class="btn btn-danger" href="?type=sport&action=delete&id=<?= $sport->getId() ?>">Supprimer</a>


</div>


<?php endforeach; ?>
