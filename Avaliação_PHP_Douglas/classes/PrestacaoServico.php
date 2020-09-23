<?php

final class PrestacaoServico extends Contrato
{
    private $prestadora, $tomadora, $servico;
    
    public function __construct($numeroRegistro, Pessoa $prestadora, Pessoa $tomadora, $servico, array $nomesTestemunhas, $dataEmissao, $dataRegistro, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesTestemunhas, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
        $this->prestadora = $prestadora;
        $this->tomadora = $tomadora;
        $this->servico = $servico;
    }

    public function exibirContrato()
    {
        echo 'Contrato do tipo Prestacao de Serviço';
    }

    public function getPrestadora()
    {
        return $this->prestadora;
    }

    public function setPrestadora($prestadora)
    {
        $this->prestadora = $prestadora;

        return $this;
    }

    public function getTomadora()
    {
        return $this->tomadora;
    }

    public function setTomadora($tomadora)
    {
        $this->tomadora = $tomadora;

        return $this;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }
}