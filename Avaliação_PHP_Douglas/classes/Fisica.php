<?php

final class Fisica extends Pessoa
{
    private $cpf;

    public function __construct($nome, $cpf)
    {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}