<?php

final class Casamento extends Certidao
{
    private $nomeConjuge1;
    private $nomeConjuge2;
    
    public function __construct($numeroRegistro, Pessoa $nomeConjuge1, Pessoa $nomeConjuge2, array $nomesDeclarantes, $dataEmissao, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesDeclarantes, $dataEmissao, $nomeTabeliao, $nomeCartorio);
        $this->nomeConjuge1 = $nomeConjuge1;
        $this->nomeConjuge2 = $nomeConjuge2;
    }

    public function getNomeConjuge1()
    {
        return $this->nomeConjuge1;
    }

    public function setNomeConjuge1($nomeConjuge1)
    {
        $this->nomeConjuge1 = $nomeConjuge1;

        return $this;
    }

    public function getNomeConjuge2()
    {
        return $this->nomeConjuge2;
    }

    public function setNomeConjuge2($nomeConjuge2)
    {
        $this->nomeConjuge2 = $nomeConjuge2;

        return $this;
    }
}