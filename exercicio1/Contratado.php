<?php

class Contratado extends Pessoa{
    
    public function __construct(
        string $nome,
        private string $cnpj = "",
        private $festa = null
    )
    {
        parent::__construct($nome);
    }

    // getters
    public function getCnpj(){
        return $this->cnpj;
    }

    public function getFesta(){
        return $this->festa;
    }

    // setters
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function setFesta(Festa $festa){
        $this->festa = $festa;
    }



}