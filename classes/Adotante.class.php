<?php

include_once("Animal.class.php");

class Adotante {
    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $expComPets;
    public $animalAdotado;


    public function exibirAdotante() {
        $animalInfo = ($this->animalAdotado instanceof Animal) 
        ? $this->animalAdotado->nome : "nenhum animal adotado";
        return "<br>
        - nome: {$this->nome}<br>
        - idade: {$this->idade}<br>
        - telefone: {$this->telefone}<br>
        - e-mail: {$this->email}<br>
        - endereco: {$this->endereco}<br>
        - outros animais: " . $this->verificarOutrosAnimais() . "<br>
        - experiência com pets: " . $this->temExperiencia() . "<br>
        - animal adotado: {$animalInfo}<br>
        ";
    }
    public function listarContato() {
        return "- telefone: {$this->telefone}<br>- email: {$this->email}";
    }
    public function resumoAdotante() {
        $animalInfo = ($this->animalAdotado instanceof Animal) 
            ? $this->animalAdotado->nome . " (" . $this->animalAdotado->especie . ")"
            : "nenhum animal associado";
        
        return "
            - Nome: {$this->nome}<br>
            - Animal: {$animalInfo}
        ";
    }

    public function adotarAnimal(Animal $animal) {
        if ($animal->status == 1) { 
            $this->animalAdotado = $animal;
            $animal->alterarStatus(0);
            return "{$this->nome} adotou {$animal->nome}! <br>";
        } else {
            return "{$animal->nome} não está disponível para adoção.<br>";
        }
    }
    public function cancelarAdocao() {
        if ($this->animalAdotado != null) {
            $nomeAnimal = $this->animalAdotado->nome;
            $this->animalAdotado->alterarStatus(1);
            $this->animalAdotado = null;
            return "A adoção de {$nomeAnimal} foi cancelada com sucesso!<br>";
        } else {
            return "Nenhum animal foi adotado para cancelar a adoção.<br>";
        }
    }

    public function verificarIdade() {
        if ($this->idade < 16) {
            return "{$this->nome} não possui a idade mínima para adotar um animal.";
        }
    }
    public function temExperiencia() {
        if ($this->expComPets > 0) {
            return "sim";
        } else {
            return "não";
        }
    }
    public function verificarOutrosAnimais() {
        if ($this->temOutrosAnimais > 0) {
            return "{$this->nome} já possui outros animais";
        } else {
            return "{$this->nome} não possui outros animais";
        }
    }
}

?>