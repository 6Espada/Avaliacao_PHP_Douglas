<?php

final class CompraVenda extends Contrato
{
    private $comprador, $vendedor, $produto;

    public function __construct($numeroRegistro, Pessoa $vendedor, Pessoa $comprador, $produto, array $nomesTestemunhas, $dataEmissao, $dataRegistro, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesTestemunhas, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
        $this->vendedor = $vendedor;
        $this->comprador = $comprador;
        $this->produto = $produto;
    }

    public function exibirContrato()
    {
        echo 'Contrato do tipo Compra e Venda';
    }

    public function getComprador()
    {
        return $this->comprador;
    }

    public function setComprador($comprador)
    {
        $this->comprador = $comprador;

        return $this;
    }

    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;

        return $this;
    }
}