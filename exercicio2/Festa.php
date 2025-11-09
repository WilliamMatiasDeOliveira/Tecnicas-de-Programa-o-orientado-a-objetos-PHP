<?php

class Festa{

    public function __construct(
        private string $dataContrato = "",
        private string $dataFesta = "",
        private float $valor = 0.0,
        private $contratado = null,
        private $cliente = null,
        private $decoracao = null
    ){}

    // getters
    public function getDataContrato(){
        return $this->dataContrato;
    }

    public function getDataFesta(){
        return $this->dataFesta;
    }

    public function getValor(){
        return number_format($this->valor, 2, ",", ".");
    }

    public function getContratado(){
        return $this->contratado;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getDecoracao(){
        return $this->decoracao;
    }

    // setters
    public function setDataContrato($dataContrato){
        $this->dataContrato = $dataContrato;
    }

    public function setDataFesta($dataFesta){
        $this->dataFesta = $dataFesta;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function setContratado($contratado){
        $this->contratado = $contratado;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function setDecoracao($decoracao){
        $this->decoracao = $decoracao;
    }
}