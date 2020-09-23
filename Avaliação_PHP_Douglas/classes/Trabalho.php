<?php

final class Trabalho extends Contrato
{
    private $empregador, $empregado, $cargo;

    public function __construct($numeroRegistro, Pessoa $empregador, Pessoa $empregado, $cargo, array $nomesTestemunhas, $dataEmissao, $dataRegistro, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesTestemunhas, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
        $this->empregador = $empregador;
        $this->empregado = $empregado;
        $this->cargo = $cargo;
    }

    public function exibirContrato()
    {
        echo 'Contrato do tipo Trabalho';
    }

    public function getEmpregador()
    {
        return $this->empregador;
    }
 
    public function setEmpregador($empregador)
    {
        $this->empregador = $empregador;

        return $this;
    }

    public function getEmpregado()
    {
        return $this->empregado;
    }

    public function setEmpregado($empregado)
    {
        $this->empregado = $empregado;

        return $this;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }
}