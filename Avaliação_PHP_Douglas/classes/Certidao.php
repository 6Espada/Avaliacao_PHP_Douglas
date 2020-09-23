<?php

abstract class Certidao
{
    protected $numeroRegistro;
    protected $nomesDeclarantes; 
    protected $dataEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    /*Considerei redundante ter um atributo tipoCertidao,
    pois as subclasses de certidao seriam os proprios tipos*/ 

    public function __construct($numeroRegistro, array $nomesDeclarantes, $dataEmissao, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        $this->numeroRegistro = $numeroRegistro;
        $this->nomesDeclarantes = $nomesDeclarantes;
        $this->dataEmissao = $dataEmissao;
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

    public function getNomesDeclarantes()
    {
        return $this->nomesDeclarantes;
    }

    public function setNomesDeclarantes($nomesDeclarantes)
    {
        $this->nomesDeclarantes = $nomesDeclarantes;

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