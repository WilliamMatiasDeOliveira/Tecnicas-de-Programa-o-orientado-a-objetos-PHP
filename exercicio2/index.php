<?php

require_once "Pessoa.php";
require_once "Telefone.php";
require_once "Chef.php";
require_once "Avaliador.php";
require_once "Receita.php";
require_once "Avaliacao.php";

$avaliador = new Avaliador("jacan", "222.222.222-22");
$telefoneAvaliador = new Telefone(11, "3365-8789");
$avaliador->setTelefone($telefoneAvaliador);
$chef = new Chef("vinicius", "bolos");
$telefoneChef = new Telefone(14, "99747-4189");
$chef->setTelefone($telefoneChef);

$receita = new Receita("fuba e cenoura", "bolo de fuba", $chef);

$avaliacao = new Avaliacao(7.5, $avaliador, $receita);

echo "<h1>Receita</h1>";
echo "<strong>Nome:</strong> " . $avaliacao->getReceita()->getNome() . "<br>";
echo "<strong>Ingredientes:</strong> " . $avaliacao->getReceita()->getIngredientes() . "<br>";
echo "<strong>Chef:</strong> " . $avaliacao->getReceita()->getChef()->getNome() . "<br>";
echo "<strong>Telefone:</strong> " . $avaliacao->getReceita()->getChef()->getTelefone() . "<br>";
echo "<strong>Especialidade:</strong> " . $avaliacao->getReceita()->getChef()->getEspecialidade() . "<br><br>";
echo "<strong>Avaliador</strong><br>";
echo "<strong>Nome:</strong> " . $avaliacao->getAvaliador()->getNome() . "<br>";
echo "<strong>CPF:</strong> " . $avaliacao->getAvaliador()->getCpf() . "<br>";
echo "<strong>Telefone:</strong> " . $avaliacao->getAvaliador()->getTelefone() . "<br><br>";

echo "<strong>Nota</strong><br>";
echo $avaliacao->getNota();
