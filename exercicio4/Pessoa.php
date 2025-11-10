<?php

abstract class Pessoa
{

    public function __construct(
        private string $nome = ""
    ) {}

    // getters
    public function getNome(){
        return $this->nome;
    }

    // setters
    public function setNome($nome){
        $this->nome = $nome;
    }
}
