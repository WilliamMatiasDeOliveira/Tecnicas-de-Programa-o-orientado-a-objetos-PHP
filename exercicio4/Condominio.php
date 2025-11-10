<?php

class Condominio
{

    public function __construct(
        private float $valor = 0.0,
        private string $dataGeracao = "",
        private string $dataPagamento = "",
        private $loja = null
    ) {}

    // getters
    public function getDataGeracao(){
        return $this->dataGeracao;
    }

    public function getValor(){
        return number_format($this->valor, 2, ",", ".");
    }

    public function getDataPagamento(){
        return $this->dataPagamento;
    }

    public function getLoja(){
        return $this->loja;
    }

    // setters
    public function setDataGeracao($dataGeracao){
        $this->dataGeracao = $dataGeracao;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function setDataPagamento($dataPagamento){
        $this->dataPagamento = $dataPagamento;
    }

    public function setLoja($loja){
        $this->loja = $loja;
    }
}
