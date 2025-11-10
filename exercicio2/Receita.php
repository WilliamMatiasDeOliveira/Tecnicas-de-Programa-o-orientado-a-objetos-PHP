<?php

class Receita
{

    public function __construct(
        private string $ingredientes,
        private string $nome = "",
        private $chef = null,
        private array $avaliacao = array()
    ) {}

    // getters
    public function getNome(){
        return $this->nome;
    }

    public function getIngredientes(){
        return $this->ingredientes;
    }

    public function getChef(){
        return $this->chef;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }


    // setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIngredientes($ingredientes){
        $this->ingredientes = $ingredientes;
    }

    public function setChef($chef){
        $this->chef = $chef;
    }

    public function setAvaliacao(Avaliacao $avaliacao){
        $this->avaliacao[] = $avaliacao;
    }

    
}
