<?php

final class Juridica extends Pessoa
{
    private $cnpj;

    public function __construct($nome, $cnpj)
    {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }
    
    public function getCpf()
    {
        return $this->cnpj;
    }

    public function setCpf($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}