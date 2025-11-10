<?php

require_once "Pessoa.php";
require_once "Proprietario.php";
require_once "Shopping.php";
require_once "Loja.php";
require_once "Condominio.php";

$shopping = new Shopping("Bollevar Shopping", "222.222.222-70", array());
$loja = new Loja(2, "2058", array(), $shopping);
$proprietario = new Proprietario("Anderson", "336.652.968.70");
$loja->setProprietario($proprietario);
$condominio = new Condominio(2546, "15/10/2025", "15/11/2025", $loja);

echo "<h1>Contrato de Locação</h1>";
echo "<strong>Proprietario(s)</strong> <br><br>";
foreach ($condominio->getLoja()->getProprietarios() as $proprietario) {
    echo "<strong>Nome:</strong> " . $proprietario->getNome() . "<br>";
    echo "<strong>CPF:</strong> " . $proprietario->getCpf() . "<br>";
}

echo "<br>";

echo "<strong>Locatario</strong> <br><br>";

echo "<strong>Nome:</strong> " . $condominio->getLoja()->getShopping()->getNome() . "<br>";
echo "<strong>Cnpj:</strong> " . $condominio->getLoja()->getShopping()->getCnpj() . "<br><br>";

echo "<strong>Data de Geração:</strong> " . $condominio->getDataGeracao() . "<br>";
echo "<strong>Data de Pagamento:</strong> " . $condominio->getDataPagamento() . "<br>";
echo "<strong>Valor:</strong> " . $condominio->getValor() . "<br><br>";
echo "<strong>Lotes:</strong> " . $condominio->getLoja()->getLotes() . "<br>";
echo "<strong>Numero:</strong> " . $condominio->getLoja()->getNumero() . "<br>";
