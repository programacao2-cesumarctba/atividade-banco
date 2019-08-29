<?php

namespace Banco;

use \Banco\Conta;

class Cliente
{
    public $nome;
    public $email;
    public $endereco;

    // construtor do metodo
    public function __construct(String $nome, String $email, String $end)
    {
        $this->nome  = $nome;
        $this->email = $email;
        $this->endereco = $end; 
    }

    

}