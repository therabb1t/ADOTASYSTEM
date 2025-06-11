<?php
class Animal{
    public $Nome;
    public $Raça;
    public $Idade;
    public $Peso;
    public $Porte;
    public $Cor;
    public $Sexo;

    public function miar(){
        return "<br>Miau!";
}
    public function dormir(){
    return "<br>Dormindo";
}
    public function comer(){
        return "<br>Comendo";
}
}
?>