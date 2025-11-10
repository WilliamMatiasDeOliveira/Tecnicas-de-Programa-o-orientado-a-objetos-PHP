<?php

class Shopping extends Pessoa
{

    public function __construct(
        string $nome,
        private string $cnpj = "",
        private array $lojas = array()
    ) 
    {
        parent::__construct($nome);
    }

    // getters
    public function getCnpj(){
        return $this->cnpj;
    }

    public function getLojas(){
        return $this->lojas;
    }

    // setters
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function setLoja($lotes, $numero){
        $this->lojas[] = new Loja($lotes, $numero);
    }
}
