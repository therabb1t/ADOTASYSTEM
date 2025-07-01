<?php

include_once("Animal.class.php");

class Gato extends Animal {
    public $pelagem;
    public $castrado = 0;
    public $independencia = 1;
    public $vacinado = 0;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia = 0;

public function __construct($nome, $idade, $sexo, $peso, $cor, $pelagem $castrado = false
$independente = 5, $vacinado = false, 
$curioso = false, $colo = false, $caixadeareia = false) {
    $this->nome = $nome;
    $this->especie = $"Gato";
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->peso = $peso;
    $this->cor = $cor;
    $this->status = "Disponível";
    $this->chipado = false

    $this->pelagem = $pelagem;
    $this->castrado = $castrado;
    $this->independente = $independente;
    $this->vacinado = $vacinado;
    $this->curioso = $curioso;
    $this->colo = $colo;
    $this->caixadeareia = $caixadeareia;

    public function exibirGato() {
        return "
        - nome: {$this->nome}<br>
        - peso: {$this->peso}kg<br>
        - pelagem: {$this->pelagem}<br>
        - castração: " . $this->verificarCastracao() . "
        - independência: " . $this->atualizarIndependencia() . "
        - vacinação: " . $this->verificarVacinacao() . "
        - curioso: " . $this->verificarCuriosidade() . "<br>
        - contato c/ humanos: " . $this->verificarContato() . "<br>
        - uso da caixa: " . $this->verificarUsoCaixa() . "
        ";
    }
    public function resumoGato() {
        if ($this->sexo > 0) {
            return "a gatinha se chama {$this->nome}, sua pelagem é {$this->pelagem} e ela está  " . $this->verificarDisponibilidade() . ".<br>";
        } else {
            return "o gatinho se chama {$this->nome}, sua pelagem é {$this->pelagem} e ele está  " . $this->verificarDisponibilidade() . ".<br>";
        }
    }

    public function verificarCastracao() {
        if ($this->castrado > 0) {
            return "está castrado(a)<br>";
        } else {
            return "não está castrado(a)<br>";
        }
    }
    public function verificarVacinacao() {
        if ($this->vacinado > 0) {
            return "está vacinado(a)<br>";
        } else {
            return "não está vacinado(a)<br>";
        }
    }
    public function verificarUsoCaixa() {
        if ($this->usaCaixaAreia > 0) {
            return "{$this->nome} sabe usar a caixa de areia<br>";
        } else {
            return "{$this->nome} ainda não sabe usar a caixa de areia<br>";
        }
    }
    public function verificarContato() {
        if ($this->adoraColo > 0) {
            return "adora colo";
        } else {
            return "não aceita colo";
        }
    }
    public function verificarCuriosidade() {
        if ($this->curioso > 0 && $this->sexo == 0) {
            return "é muito curiosa";
        } if ($this->curioso > 0 && $this->sexo == 1) {
            return "é muito curioso";
        } else {
            return "não tem tanta curiosidade";
        }
    }
    public function verificarPelagem() {
        return "a pelagem de {$this->nome} é {$this->pelagem}.<br>";
    }
    public function atualizarIndependencia() {
        if ($this->independencia > 0 && $this->independencia < 4) {
            return "{$this->nome} é pouco independente.<br>";
        } if ($this->independencia > 3 && $this->independencia < 7) {
            return "{$this->nome} é moderadamente independente.<br>";
        } if ($this->independencia > 6 && $this->independencia < 9) {
            return "{$this->nome} é bastante independente.<br>";
        } if ($this->independencia > 8 && $this->independencia < 11) {
            return "{$this->nome} é extremamente independente.<br>";
        } else {
            return "valor inválido<br>";
        }
    }

    public function castrar() {
        if ($this->castrado == 0) { 
            $this->castrado = 1;
            return "{$this->nome} foi castrado(a) com sucesso!<br>";
        }
    }
    public function vacinar() {
        if ($this->vacinado == 0) {
            $this->vacinado = 1;
            return "{$this->nome} foi vacinado(a) com sucesso!<br>";
        }
    }
    public function ensinarCaixaAreia() {
        if ($this->usaCaixaAreia == 0) {
            $this->usaCaixaAreia = 1;
            return "agora {$this->nome} sabe usar a caixa de areia!<br>";
        }
    }
    public function atualizarIndependência($grau) {
        if ($grau == null) {
            if ($this->independencia < 10) {
                $this->independencia++;
            }
        } else {
            if ($grau >= 1 && $grau <= 10) {
                $this->independencia = $grau;
            } else {
                return "valor inválido";
            }
        }
        
    }
}


?>