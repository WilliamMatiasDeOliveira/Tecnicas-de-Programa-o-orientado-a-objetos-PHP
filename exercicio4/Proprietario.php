<?php

class Proprietario extends Pessoa{

    public function __construct(
        string $nome,
        private string $cpf = "",
        private array $lojas = array()
    )
    {
        parent::__construct($nome);
    }

    // getters
    public function getCpf(){
        return $this->cpf;
    }

    public function getLoja(){
        return $this->lojas;
    }

    // setters
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setLoja(Loja $loja){
        $this->lojas[] = $loja;
    }
}