<?php
class Cliente {
    public $Nome;
    public $CPF;

    public function visitarAnimal($animal) {
        echo "<br>" . $this->Nome . " está visitando " . $animal->Nome . ".";
    }

    public function adotar($animal) {
        $animal->StatusAdocao->atualizar("Adotado");
        echo "<br>" . $this->Nome . " adotou o(a) " . $animal->Nome . "!";
    }
}
?>
