<?php

class Chef extends Pessoa{

    public function __construct(
        string $nome,
        private string $especialidade,
        private $receita = null
    )
    {
        parent::__construct($nome);
    }

    // getters
    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function getReceita(){
        return $this->receita;
    }

    // setters
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function setReceita(Receita $receita){
        $this->receita = $receita;
    }
}