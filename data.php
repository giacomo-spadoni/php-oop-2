<?php

include __DIR__ . '/Models/product.php';
include __DIR__ . '/Models/category.php';
include __DIR__ . '/Models/typeProduct.php';

$prodotti = [
    $cucciaGrande = new Bed('cuccia comodissima', 30.99, './img/cucciagrande.jpg', new Category('Cane', 'taglia medio o piccola'), 'medium', "piuma d'oca"),
    $cucciaPiccola = new Bed('cuccia piccolina', 20.99, './img/cucciapiccola.jpeg', new Category('Gatto', 'taglia piccola'), 'small', "spugna"),
    $crocchette = new Food('crocchette buonissime', 10.99, './img/crocchette.jpg', new Category('Cane', 'taglia grande'), 'crocchette', "01/01/2025"),
    $pallina = new Game('pallina rimbalzina', 5.99, './img/pallina.webp', new Category('Cane', 'tutte le taglie'), 'plastica', false)
];
