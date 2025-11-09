<?php

class Cliente extends Pessoa{

    public function __construct(
        string $nome,
        string $celular,
        private string $cpf = ""
    )
    {
        parent::__construct($nome, $cpf);
    }

    // getters
    public function getCpf(){
        return $this->cpf;
    }

    public function getCelular(){
        return $this->celular;
    }

    // setters
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }
}