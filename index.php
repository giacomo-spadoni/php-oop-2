<?php
include __DIR__ . '/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .flex {
        display: flex;
    }
</style>

<body>

    <div>cliente <?= $pippo->nome ?> <?= $pippo->cognome ?></div>
    <div>carrello :

        <?php foreach ($pippo->riempiCarrello($prodotti) as $prodotto) : ?>
            <?= $prodotto->nome ?> -
        <?php endforeach; ?>
    </div>
    <div class="flex">
        <?php foreach ($prodotti as $prodotto) : ?>
            <ul>
                <li><?= $prodotto->nome ?></li>
                <li><?= $prodotto->prezzo() ?></li>
                <img width="100px" height="100px" src="<?= $prodotto->img ?>" alt="">
                <li><?= $prodotto->category->categoria ?></li>
                <li><?= $prodotto->category->descrizione ?></li>
                <?php if (get_class($prodotto) == 'Food') : ?>
                    <li>Tipologia: <?= $prodotto->tipologia ?></li>
                    <li>Data di Scadenza: <?= $prodotto->scadenza ?></li>
                <?php endif; ?>
                <?php if (get_class($prodotto) == 'Bed') : ?>
                    <li>Grandezza: <?= $prodotto->grandezza ?></li>
                    <li>Materiale: <?= $prodotto->materiale ?></li>
                <?php endif; ?>
                <?php if (get_class($prodotto) == 'Game') : ?>
                    <li>Materiale: <?= $prodotto->materiale ?></li>
                    <li><?= $prodotto->isedible() ?></li>
                <?php endif; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</body>

</html>