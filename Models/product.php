<?php

class Product
{
    public function __construct(public $nome, public $prezzo, public Category $category)
    {
    }
}
