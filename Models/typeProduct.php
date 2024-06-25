<?php

class Food extends Product
{
    public function __construct(public $nome, public $prezzo, public Category $category, public $tipologia, public $scadenza)
    {
    }
}

class Bed extends Product
{
    public function __construct(public $nome, public $prezzo, public Category $category, public $grandezza, public $materiale)
    {
    }
}

class Game extends Product
{
    public function __construct(public $nome, public $prezzo, public Category $category, public $materiale, public $commestibile)
    {
    }
}
