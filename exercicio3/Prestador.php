<?php

class Prestador extends Pessoa{

    public function __construct(
        string $nome,
        string $celular,
        private string $especialidade = "",
        private array $itens = array()
    )
    {
        parent::__construct($nome, $celular);
    }

    // getters
    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function getItens(){
        return $this->itens;
    }

    // setters
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function setItens(Itens $item){
        $this->itens[] = $item;
    }
}