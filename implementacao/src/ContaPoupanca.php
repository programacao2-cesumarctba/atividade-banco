<?php

namespace Banco;

use \Banco\Conta;

class ContaPoupanca extends Conta
{
    // atributo
    public $porcentagem = 0.02;

    // metodo
    public function rendimento()
    {   
        if ($this->saldo > 0) {
            $rendimento = $this->saldo * $this->porcentagem;
            $this->saldo += $rendimento;
            return $this->geraLog("Rendimento Poupança", $rendimento);
        }
    }

    // sobreescrita
    public function saque(Float $valor)
    {
        if (($this->saldo > 0) && ($valor <= $this->saldo)) {
            parent::saque($valor);
        }else {
            return $this->geraLog("Saldo Insuficiente!", $valor);
        }
    }
}