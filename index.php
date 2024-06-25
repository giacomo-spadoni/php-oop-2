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
    <div class="flex">
        <?php foreach ($prodotti as $prodotto) : ?>
            <ul>
                <li><?= $prodotto->nome ?></li>
                <li><?= $prodotto->prezzo() ?></li>
                <img width="100px" height="100px" src="<?= $prodotto->img ?>" alt="">
                <li><?= $prodotto->category->categoria ?></li>
                <li><?= $prodotto->category->descrizione ?></li>
                <?php if (property_exists($prodotto, 'grandezza')) : ?>
                    <li>Grandezza: <?= $prodotto->grandezza ?></li>
                <?php endif; ?>

                <?php if (property_exists($prodotto, 'materiale')) : ?>
                    <li>Materiale: <?= $prodotto->materiale ?></li>
                <?php endif; ?>

                <?php if (property_exists($prodotto, 'tipologia')) : ?>
                    <li>Tipologia: <?= $prodotto->tipologia ?></li>
                <?php endif; ?>

                <?php if (property_exists($prodotto, 'scadenza')) : ?>
                    <li>Scadenza: <?= $prodotto->scadenza ?></li>
                <?php endif; ?>

                <?php if (property_exists($prodotto, 'commestibile')) : ?>
                    <li><?= $prodotto->isedible() ?></li>
                <?php endif; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</body>

</html>