<?php

class Avaliador extends Pessoa{

    public function __construct(
        string $nome,
        private string $cpf = "",
        private array $avaliacao = array()
    )
    {
        parent::__construct($nome);
    }

    // getters
    public function getCpf(){
        return $this->cpf;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    // setters
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setAvaliacao(Avaliacao $avaliacao){
        $this->avaliacao[] = $avaliacao;
    }

}