<?php

class Telefone
{

    public function __construct(
        private int $ddd = 0,
        private string $numero = ""
    ) {}

    // getters
    public function getDdd(){
        return $this->ddd;
    }

    public function getNumero(){
        return $this->numero;
    }

    // setters
    public function setDdd($ddd){
        $this->ddd = $ddd;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}
