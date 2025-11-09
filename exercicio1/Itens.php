<?php

class Itens
{
    public function __construct(
        private string $horario = "",
        private string $status = "",
        private $prestador = null,
        private $agenda = null,
        private $servico = null
    ) {}

    // getters
    public function getHorario(){
        return $this->horario;
    }

    public function getStatus(){
        return $this->status;
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

    // setters
    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function setStatus($status){
        $this->status = $status;
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
}
