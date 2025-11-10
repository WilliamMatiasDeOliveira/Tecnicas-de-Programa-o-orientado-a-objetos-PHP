<?php

class Loja{

    public function __construct(
        private int $lotes = 0,
        private string $numero = "",
        private array $proprietarios = array(),
        private $shopping = null
    ){}

    // getters
    public function getLotes(){
        return $this->lotes;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getProprietarios(){
        return $this->proprietarios;
    }

    public function getShopping(){
        return $this->shopping;
    }

    // setters
    public function setLote($lote){
        $this->lotes = $lote;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setProprietario($proprietario){
        $this->proprietarios[] = $proprietario;
    }

    public function setShopping(Shopping $shopping){
        $this->shopping = $shopping;
    }
}