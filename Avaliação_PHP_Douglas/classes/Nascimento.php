<?php

final class Nascimento extends Certidao
{
    private $nome;

    public function __construct($numeroRegistro, Pessoa $nome, array $nomesDeclarantes, $dataEmissao, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesDeclarantes, $dataEmissao, $nomeTabeliao, $nomeCartorio);
        $this->nome = $nome;
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