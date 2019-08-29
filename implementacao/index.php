<?php 

require_once __DIR__ . '/vendor/autoload.php';

use \Banco\Helper;
use \Banco\Cliente;
use \Banco\Agencia;
use \Banco\ContaCorrente;
use \Banco\ContaPoupanca;

$cli1   = new Cliente("Joao", "joao@email.com", "Rua das flores, 111");
$cli2   = new Cliente("Robson", "robson@email.com", "Rua Pedro II, 666");
$ag1    = new Agencia("101010", "Rua Marechal Floriano, 2000");
$cP     = new ContaPoupanca('11111', 1000, $ag1, $cli1);
$cC     = new ContaCorrente('22222', 500, $ag1, $cli2);

// Helper::debug($cli1);
// Helper::debug($cli2);
// Helper::debug($ag1);
// Helper::debug($cP);
// Helper::debug($cC);

$cP->saque(750); // + 250
$cC->saque(600); // -100

$cP->saque(350); // negado
$cC->saque(200); // -300


$cP->rendimento(); // + 250
$cC->cobranca(); // -300


$cP->deposito(500); // 255 + 500
$cC->deposito(250); // -330 + 250

$cP->saque(120); // negado
$cC->saque(400); // -300

$cP->saldo();
$cC->saldo(); 

// Helper::debug($cli1);
// Helper::debug($cli2);
// Helper::debug($ag1);
// Helper::debug($cP);
// Helper::debug($cC);




// Helper::debug($ag1);
// Helper::debug($ag1);

