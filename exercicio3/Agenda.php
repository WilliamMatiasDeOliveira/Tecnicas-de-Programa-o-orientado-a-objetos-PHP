<?php

class Agenda
{

    public function __construct(
        string $horario,
        string $status,
        private $cliente = null,
        private $prestador = null,
        private $agenda = null,
        private $servico = null,
        private string $data = "",
        private array $itens = array()
    ) 
    {
        $this->itens[] = new Itens($horario, $status, $prestador, $agenda, $servico);
    }

    // getters
    public function getCliente(){
        return $this->cliente;
    }

    public function getPrestador(){
        return $this->prestador;
    }

    public function getAgenda(){
        return $this->agenda;
    }

    public function getServico(){
        return $this->servico;
    }

    public function getData(){
        return $this->data;
    }

    public function getItens(){
        return $this->itens;
    }

    // setters
    public function setCliente(Cliente $cliente){
        $this->cliente = $cliente;
    }
    
    public function setPrestador(Prestador $prestador){
        $this->prestador = $prestador;
    }

    public function setAgenda(Agenda $agenda){
        $this->agenda = $agenda;
    }

    public function setServico(Servico $servico){
        $this->servico = $servico;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function setItens($horario, $status, $prestador, $agenda, $servico){
        $this->itens[] = new Itens($horario, $status, $prestador, $agenda, $servico);
    }
}
