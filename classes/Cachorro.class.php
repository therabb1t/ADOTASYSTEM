<?php

include_once("Animal.class.php");

class Cachorro extends Animal {
    public $nome;
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;
    public function exibirCachorro() {
        return "
        - nome: {$this->nome}<br>
        - peso: {$this->peso}<br>
        - raca: {$this->raca}<br>
        - porte: {$this->porte}<br>
        - nível de energia: {$this->nivelEnergia}<br>
        - vacinado: {$this->vacinado}<br>
        - vermifugado: {$this->vermifugado}<br>
        - sociabilidade: {$this->sociavel}<br>
        - adestrado: {$this->adestrado}<br>
        ";
    }
}

?>