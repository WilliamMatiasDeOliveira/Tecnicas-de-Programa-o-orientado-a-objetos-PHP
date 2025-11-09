<?php

require_once "Pessoa.php";
require_once "Cliente.php";
require_once "Contratado.php";
require_once "Telefone.php";
require_once "Festa.php";
require_once "Decoracao.php";

$contratado = new Contratado("WMO eventos", "222.222.222.-22", null);
$contratado->setTelefone(15, "99854-8796");
$contratado->setTelefone(16, "4625-8725");
$cliente = new Cliente("william matias", "336.652.968-70");
$cliente->setTelefone(14, "99654-6814");
$cliente->setTelefone(11, "3652-8547");
$decoracao = new Decoracao("Decoração infantil tema Battiman");

$festa = new Festa("20/12/2025", "25/12/2025", 2540, $contratado, $cliente, $decoracao);

echo "<h1>Festa</h1>";

echo "<strong>Cliente:</strong> " . $festa->getCliente()->getNome() . "<br>";
echo "<strong>CPF:</strong> " . $festa->getCliente()->getCpf() . "<br>";
foreach($festa->getCliente()->getTelefones() as $telefone){
    echo "<strong>Telefone:</strong> ({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
}
echo "<br>";
echo "<strong>Empresa Contratada:</strong> " . $festa->getContratado()->getNome() . "<br>";
echo "<strong>Empresa Cnpj:</strong> " . $festa->getContratado()->getCnpj() . "<br>";
foreach($festa->getContratado()->getTelefones() as $telefone){
    echo "<strong>Telefone:</strong> " . "({$telefone->getDdd()}) {$telefone->getNumero()} <br>";
}
echo "<br>";
echo "<strong>Data do Contrato:</strong> " . $festa->getDataContrato() . "<br>";
echo "<strong>Data da Festa:</strong> " . $festa->getDataFesta() . "<br>";
echo "<strong>Valor:</strong> " . $festa->getValor() . "<br><br>";
echo "<strong>Decoração:</strong> " . $festa->getDecoracao()->getDescritivo() . "<br>";
