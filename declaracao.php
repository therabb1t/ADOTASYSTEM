<?php
include_once './Classes/Animal.class.php';
include_once './Classes/StatusAdocao.class.php';
include_once './Classes/Funcionario.class.php';
include_once './Classes/Cliente.class.php';

$animal = new Animal();
$animal->Nome = "Luke Skywalker";
$animal->Raca = "Cachorro";
$animal->Idade = 10;
$animal->Sexo = "Macho";

$status = new StatusAdocao();
$status->atualizar("Disponível");
$animal->StatusAdocao = $status;

$funcionario = new Funcionario();
$funcionario->Nome = "Sandro";
$funcionario->Cargo = "Atendente";

$cliente = new Cliente();
$cliente->Nome = "Ana";
$cliente->CPF = "000.000.000-00";

$funcionario->registrarAnimal($animal);

$animal->brincar();
$animal->comer("ração");
$animal->dormir();
$animal->mostrarStatus();

$cliente->visitarAnimal($animal);
$cliente->adotar($animal);
$animal->mostrarStatus();
$funcionario->exibirDados();
?>
