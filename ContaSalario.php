<?php

include_once './Conta.php';

final class ContaSalario extends Conta{

    public function sacar($valor) {
        $this->saldo -= $valor;
        $this->saldo -= 2;
    }

}
