<?php

include_once './classes/Animal.class.php';
include_once './classes/Gato.class.php';
include_once './classes/Cachorro.class.php';
include_once './classes/Adotante.class.php';

$gato = new Gato();
$gato->nome = 'Bakunin';
$gato->peso = '3';
$gato->status = 0;
$gato->sexo = 0;
$gato->idade = 2;
$gato->pelagem = 'preto';
$gato->cor = 'preto';
$gato->curioso = 0;
$gato->adoraColo = 1;
$gato->especie = 'gato';
$gato->cor = 'preto';

echo $gato->exibirGato();
echo "<br>";

echo $gato->castrar();
echo $gato->vacinar();
echo $gato->ensinarCaixaAreia();
echo $gato->atualizarIndependência(7);
echo "<br>";

echo $gato->resumoGato();
echo "<br>";

echo $gato->exibirGato();
echo "<br><br>";

echo $gato->exibirFicha();
echo $gato->atualizarPeso(2);
echo $gato->marcarChipado();
echo $gato->alterarStatus(1);
echo "<br><br>";

echo $gato->exibirFicha();

$adotante = new Adotante();
$adotante->nome = Sandro";
$adotante->idade = 38;
$adotante->telefone = "+55 90000-0000";
$adotante->email = "profsandromc@gmail.com";
$adotante->endereco = "Porto Alegre";
$adotante->expComPets = 3;

echo $adotante->adotarAnimal($gato);
echo $gato->exibirFicha();
echo $adotante->exibirAdotante();

echo $adotante->cancelarAdocao();
echo $gato->exibirFicha();
echo $adotante->exibirAdotante();
echo "<br>";
echo $adotante->resumoAdotante();
?>