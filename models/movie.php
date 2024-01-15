<?php


class Movie
{
    public $titolo;
    public $genere;
    public $regista;

    public function __construct($_titolo, $_genere, $_regista)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->regista = $_regista;
    }

    public function mostraFilm()
    {
        echo "Film: ";
        echo "Titolo: {$this->titolo} ";
        echo "Genere: {$this->genere} ";
        echo "Regista: {$this->regista} ";
    }
}

?>