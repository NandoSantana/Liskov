<?php
include_once './ContaCorrente.php';
include_once './ContaSalario.php';

//include_once './ContaPoupanca.php';
//classe derivada de Conta
$cs = new ContaSalario();
$cs->depositar(100);
$cs->juros();

//$cc = new ContaCorrente();
//$cc->depositar(100);
//$cc->juros();

//$cp = new ContaPoupanca();
//$cp->depositar(100);
//$cp->juros();

