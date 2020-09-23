<?php

final class ControleCertidao
{   
    private $certidoes;

    public function adicionarCertidao ($certidao)
    {
        $this->certidoes[] = $certidao;
    }

    public function totalCertidao ()
    {
       echo 'Total de Certidões: ' . count ($this->certidoes);
    }

    public function getCertidoes()
    {
        return $this->certidoes;
    }

    public function setCertidoes($certidoes)
    {
        $this->certidoes = $certidoes;

        return $this;
    }
}