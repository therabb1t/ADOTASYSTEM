<?php
class Funcionario {
    public $Nome;
    public $Cargo;

    public function registrarAnimal($animal) {
        echo "<br>" . $this->Nome . " registrou o animal: " . $animal->Nome;
    }

    public function atualizarStatus($animal, $novoStatus) {
        $animal->StatusAdocao->atualizar($novoStatus);
    }

    public function exibirDados() {
        echo "<br>Funcionário: " . $this->Nome . ", Cargo: " . $this->Cargo;
    }
}
?>
