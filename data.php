<?php

include './Models/category.php';
include  './Models/product.php';
include './Models/typeProduct.php';

$cucciaGrande = new Bed('cuccia comodissima', 30.99, new Category('Cane', 'taglia medio o piccola'), 'medium', "piuma d'oca");
$cucciaPiccola = new Bed('cuccia piccolina', 20.99, new Category('Gatto', 'taglia piccola'), 'small', "spugna");
$crocchette = new Food('crocchette buonissime', 10.99, new Category('Cane', 'taglia grande'), 'crocchette', "01/01/2025");
$pallina = new Game('pallina rimbalzina', 5.99, new Category('Cane', 'tutte le taglie'), 'plastica', false);
