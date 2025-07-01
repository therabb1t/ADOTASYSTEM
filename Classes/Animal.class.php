<?php

class Animal {
    public $nome;
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $chipado = 0;

    public function exibirFicha() {
        return "
        - nome: {$this->nome}<br>
        - especie: {$this->especie}<br>
        - idade: {$this->idade} anos<br>
        - sexo: " . $this->verificarSexo() . "<br>
        - peso: {$this->peso}kg<br>
        - cor: {$this->cor}<br>
        - status: " . $this->verificarDisponibilidade() . "<br>
        - chipado: " . $this->verificarChipado() . "<br>
        ";
    }
    public function resumoAnimal() {
        return "o animal se chama {$this->nome}, sua espécie é {$this->especie} e está  " . $this->verificarDisponibilidade() . ".<br>";
    }

    public function verificarDisponibilidade() {
        if ($this->status > 0) {
            return "disponível";
        } else {
            return "indisponível";
        }
    }
    public function verificarIdade() {
        if ($this->idade < 2) {
            return "filhote";
        } if ($this->idade > 1 && $this->idade < 8) {
            return "adulto(a)";
        } else {
            return "idoso(a)";
        }
    }
    public function verificarChipado() {
        if ($this->chipado > 0) {
            return "está chipado(a)";
        } else {
            return "não está chipado(a)";
        }
    }
    public function verificarSexo() {
        if ($this->sexo > 0) {
            return "fêmea";
        } else {
            return "macho";
        }
    }

    
    public function atualizarPeso($peso) {
        $this->peso = $peso;
    }
    public function marcarChipado() {
        if ($this->chipado == 0) { 
            $this->chipado = 1;
        }
    }
    public function desmarcarChipado() {
        if ($this->chipado == 1) { 
            $this->chipado = 0;
        }
    }
    public function alterarStatus($novoStatus) {
        $this->status = $novoStatus;
    }
}
?>