<?php
class StatusAdocao {
    public $Status;

    public function atualizar($novoStatus) {
        $this->Status = $novoStatus;
        echo "<br>Status atualizado para: " . $this->Status;
    }

    public function statusAtual() {
        return $this->Status;
    }
}
?>
