<?php

class Product
{
    public function __construct(public $nome, public $prezzo, public $img, public Category $category)
    {
    }
    public function prezzo()
    {
        return $this->prezzo . '€';
    }
}
