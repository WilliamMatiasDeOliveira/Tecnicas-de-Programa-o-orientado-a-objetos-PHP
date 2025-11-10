<?php

abstract class Pessoa{
    
    public function __construct(
        protected string $nome = "",
        private $telefone = null
    ){}

    // getters
    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    // setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setTelefone(Telefone $telefone){
        $this->telefone = $telefone;
    }
}