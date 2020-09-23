<?php

final class Propriedade extends Certidao
{
    private $nomeProprietario;
    private $nomePropriedade;
    
    public function __construct($numeroRegistro, Pessoa $nomeProprietario, $nomePropriedade, array $nomesDeclarantes, $dataEmissao, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesDeclarantes, $dataEmissao, $nomeTabeliao, $nomeCartorio);
        $this->nomeProprietario = $nomeProprietario;
        $this->nomePropriedade = $nomePropriedade;
    }

    public function getNomeProprietario()
    {
        return $this->nomeProprietario;
    }

    public function setNomeProprietario($nomeProprietario)
    {
        $this->nomeProprietario = $nomeProprietario;

        return $this;
    }

    public function getNomePropriedade()
    {
        return $this->nomePropriedade;
    }

    public function setNomePropriedade($nomePropriedade)
    {
        $this->nomePropriedade = $nomePropriedade;

        return $this;
    }
}