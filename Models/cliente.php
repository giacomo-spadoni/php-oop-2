<?php


class Client
{
    public $carrello = [];
    public function __construct(public $nome, public $cognome, public $sconto)
    {
    }
    public function riempiCarrello($prodotti)
    {
        for ($i = 0; $i < 2; $i++) {
            $this->carrello[] = $prodotti[$i];
        }

        return $this->carrello;
    }
}
