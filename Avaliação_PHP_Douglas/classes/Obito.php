<?php

final class Obito extends Certidao
{
    private $nomeFalecido;

    public function __construct($numeroRegistro, Pessoa $nomeFalecido, array $nomesDeclarantes, $dataEmissao, Pessoa $nomeTabeliao, Pessoa $nomeCartorio)
    {
        parent::__construct ($numeroRegistro, $nomesDeclarantes, $dataEmissao, $nomeTabeliao, $nomeCartorio);
        $this->nomeFalecido = $nomeFalecido;
    }

    public function getNomeFalecido()
    {
        return $this->nomeFalecido;
    }

    public function setNomeFalecido($nomeFalecido)
    {
        $this->nomeFalecido = $nomeFalecido;

        return $this;
    }
}