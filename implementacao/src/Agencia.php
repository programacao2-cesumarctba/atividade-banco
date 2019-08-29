<?php

namespace Banco;

class Agencia
{
   public $codigo;
   public $endereco;

   // construtor
    public function __construct(String $cod, String $end)
    {
        $this->codigo = $cod;
        $this->endereco = $end;
    }

}