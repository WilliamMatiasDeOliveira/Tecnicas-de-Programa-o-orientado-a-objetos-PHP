<?php

class Cliente extends Pessoa{

    public function __construct(
        string $nome,
        string $celular,
        private string $cpf = ""
    )
    {
        parent::__construct($nome, $celular);
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