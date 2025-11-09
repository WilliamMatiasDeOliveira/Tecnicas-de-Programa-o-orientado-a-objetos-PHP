<?php

class Decoracao
{

    public function __construct(
        private string $descritivo = "",
        private array $festas = array()
    ) {}

    // getters
    public function getDescritivo(){
        return $this->descritivo;
    }

    public function getFestas(){
        return $this->festas;
    }

    // setters
    public function setDescritivo($descritivo){
        $this->descritivo = $descritivo;
    }

    public function setFesta(Festa $festa){
        $this->festas[] = $festa;
    }
}
