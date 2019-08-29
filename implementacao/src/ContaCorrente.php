<?php

namespace Banco;

use \Banco\Conta;

class ContaCorrente extends Conta
{
    // atributo
    public $limite = 1000;
    public $porcentagem = 0.1;

    // metodo
    public function cobranca()
    {   
        if ($this->saldo < 0) {
            $cobranca = $this->saldo * $this->porcentagem;
            $this->saldo += $cobranca;
            return $this->geraLog("Cobrança Conta Corrente", $cobranca);
        }
    }

}