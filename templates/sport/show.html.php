
<div class="border border-dark mt-5">

    <h2>Name : <?= $sport->getName() ?></h2>
    <p><strong>Description : <?= $sport->getDescription() ?> </strong></p>
    <p>Accessory : <?= $sport->getAccessory() ?> </p>

    <a class="btn btn-primary" href="?type=sport&action=index">retour</a>
    <a class="btn btn-danger" href="?type=sport&action=delete&id=<?= $sport->getId() ?>">Supprimer</a>



</div>