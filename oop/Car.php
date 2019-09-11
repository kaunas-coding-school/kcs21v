<?php

Class Car
{
    public $spalva;
    public $greitis;
    private $rida;

    public function vaziuoti()
    {
        echo 'Automobilis važiuoja ' . $this->greitis . 'greičiu';
        $this->rida += (int) $this->greitis;
    }

    public function gautiSpalva()
    {
        return $this->spalva;
    }

    public function gautiRida()
    {
        return $this->rida;
    }
}
