<?php

class Cliente extends Pessoa{

    public function __construct(
        string $nome,
        private string $cpf = ""
    )
    {
        parent::__construct($nome);
    }

    // getters
    public function getCpf(){
        return $this->cpf;
    }

    // setters
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}