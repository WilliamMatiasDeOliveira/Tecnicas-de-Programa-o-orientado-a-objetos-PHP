<?php

class Servico{

    public function __construct(
        private string $descritivo = "",
        private float $preco = 0.0
    ){}

    // getters
    public function getDescritivo(){
        return $this->descritivo;
    }

    public function getPreco(){
        return $this->preco;
    }

    // setters
    public function setDescritivo($descritivo){
        $this->descritivo = $descritivo;
    }

    public function sertPreco($preco){
        $this->preco = $preco;
    }
}