<?php
include_once './Classes/Animal.class.php';
include_once './Classes/StatusAdocao.class.php';
include_once './Classes/Funcionario.class.php';
include_once './Classes/Cliente.class.php';

$animal = new Animal();
$animal->Nome = "Luna";
$animal->Especie = "Cachorro";
$animal->Idade = 3;
$animal->Sexo = "Fêmea";

$status = new StatusAdocao();
$status->Status = "Disponível";
$animal->StatusAdocao = $status;

$funcionario = new Funcionario();
$funcionario->Nome = "Carlos";
$funcionario->Cargo = "Atendente";

$cliente = new Cliente();
$cliente->Nome = "Julia";
$cliente->Documento = "123.456.789-00";

$funcionario->registrarAnimal($animal);
$animal->exibirFicha();
$cliente->solicitarAdocao($animal);
$funcionario->aprovarAdocao($cliente, $animal);
$animal->exibirFicha();
?>
