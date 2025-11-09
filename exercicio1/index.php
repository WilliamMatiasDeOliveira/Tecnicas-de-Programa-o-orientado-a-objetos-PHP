<?php
require_once "Pessoa.php";
require_once "Cliente.php";
require_once "Prestador.php";
require_once "Agenda.php";
require_once "Itens.php";
require_once "Servico.php";



$cliente = new Cliente("pricila", "(14)99747-4189", "222.222.222-70");
$prestador = new Prestador("Joaquin", "(15)3372-3776", "pintura");
$servico = new Servico("Pintura interna da residencia", 2542);
$agenda1 = new Agenda("16:20", "ativo", $cliente, $prestador, null, $servico, "15/10/2025");

echo "<h1>Agenda</h1>";

echo "<strong>Cliente: </strong>{$agenda1->getCliente()->getNome()}<br>";
echo "<strong>Telefone: </strong>{$agenda1->getCliente()->getCelular()}<br>";
echo "<strong>CPF: </strong>{$agenda1->getCliente()->getCpf()}<br><br>";

echo "<strong>Descrição do Serviço</strong><br>";
echo "<strong>Servico: </strong>{$agenda1->getServico()->getDescritivo()}<br>";
echo "<strong>Preço: </strong>" . number_format($agenda1->getServico()->getPreco(), 2, ".", ",") . "<br>";
echo "<strong>Prestador: </strong>{$agenda1->getPrestador()->getNome()}<br>";
echo "<strong>Prestador: </strong>{$agenda1->getPrestador()->getNome()}<br>";
echo "<strong>Celular: </strong>{$agenda1->getPrestador()->getCelular()}<br>";
echo "<strong>Especialidade: </strong>{$agenda1->getPrestador()->getEspecialidade()}<br>";





