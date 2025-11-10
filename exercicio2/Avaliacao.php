<?php

class Avaliacao{

    public function __construct(
        private float $nota = 0.0,
        private $avaliador = null,
        private $receita = null
    ){}

    // getters
    public function getNota(){
        return $this->nota;
    }

    public function getAvaliador(){
        return $this->avaliador;
    }

    public function getReceita(){
        return $this->receita;
    }

    // setters
    public function setNota($nota){
        $this->nota = $nota;
    }

    public function setAvaliador(Avaliador $avaliador){
        $this->avaliador = $avaliador; 
    }

    public function setReceita(Receita $receita){
        $this->receita = $receita;
    }
}