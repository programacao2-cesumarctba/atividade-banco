<?php

namespace Banco;

abstract class Conta
{
    // atributos
    public $numero;
    public $saldo;
    public $agencia;
    public $historico = [];
    public $cliente;


    // metodo construtor
    public function __construct(String $numero, Float $saldo, Agencia $ag, Cliente $cli)
    {   
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->agencia = $ag;
        $this->cliente = $cli;
    }


    // metodos da classe conta
    public function saldo() : Conta
    {
        \Banco\Helper::debug($this);
        return $this;
    }

    public function deposito(Float $valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return $this->geraLog("Deposito", $valor); 
        }

    }


    public function saque(Float $valor)
    {
        if ($valor > 0) {
            $this->saldo -= $valor;
            return $this->geraLog("Saque", $valor);
        }
    }


    // gera o historico de transações
    protected function geraLog(String $op, Float $valor = 0)
    {
        $this->historico[] = [
            'operacao' => $op,
            'Valor da op' => $valor,
            'cliente'  => $this->cliente,
            'saldo'    => $this->saldo
        ];  
    }




}