<?php

abstract class Contrato implements Contratavel
{
    protected $numeroRegistro, $nomesTestemunhas, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio;

    
    public function __construct($numeroRegistro, array $nomesTestemunhas, $dataEmissao, $dataRegistro, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        $this->numeroRegistro = $numeroRegistro;
        $this->nomesTestemunhas = $nomesTestemunhas;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }
    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }

    public function setNumeroRegistro($numeroRegistro)
    {
        $this->numeroRegistro = $numeroRegistro;

        return $this;
    }

    public function getNomesTestemunhas()
    {
        return $this->nomesTestemunhas;
    }

    public function setNomesTestemunhas($nomesTestemunhas)
    {
        $this->nomesTestemunhas = $nomesTestemunhas;

        return $this;
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }

    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;

        return $this;
    }

    public function getNomeTabeliao()
    {
        return $this->nomeTabeliao;
    }

    public function setNomeTabeliao($nomeTabeliao)
    {
        $this->nomeTabeliao = $nomeTabeliao;

        return $this;
    }

    public function getNomeCartorio()
    {
        return $this->nomeCartorio;
    }

    public function setNomeCartorio($nomeCartorio)
    {
        $this->nomeCartorio = $nomeCartorio;

        return $this;
    }
}