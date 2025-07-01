<?php
class Animal {
    public $Nome;
    public $Raca;
    public $Idade;
    public $Sexo;
    public $StatusAdocao;

    public function brincar() {
        echo "<br>" . $this->Nome . " está brincando feliz no pátio!";
    }

    public function comer($comida) {
        echo "<br>" . $this->Nome . " está comendo " . $comida . " e parece muito feliz!";
    }

    public function dormir() {
        echo "<br>" . $this->Nome . " está dormindo.";
    }

    public function mostrarStatus() {
        echo "<br>Status de adoção de " . $this->Nome . ": " . $this->StatusAdocao->statusAtual();
    }
}
?>
