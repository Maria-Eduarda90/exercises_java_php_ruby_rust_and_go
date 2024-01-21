<?php

class Veiculo {
    private $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "andou";
    }

    public function Parar(){
        echo "parou";
    }
}

class Carro extends Veiculo {
    public function ligarLimpador(){
        echo "Limpando";
    }

}

class Moto extends Moto {
    public function darGrau(){
        echo "Dando grau";
    }
}