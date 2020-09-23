<?php

abstract class Pessoa
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}