<?php

abstract class Pessoa{

    public function __construct(
        protected string $nome = "",
        private array $telefones = array()
    )
    {}

    // getters
    public function getNome(){
        return $this->nome;
    }

    public function getTelefones(){
        return $this->telefones;
    }

    // setters
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setTelefone(int $ddd, string $numero){
        $this->telefones[] = new Telefone($ddd, $numero);
    }
}