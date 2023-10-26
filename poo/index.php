<?php

class Frutas {
    var $nome;
    var $tipo;

    public function __construct(){ }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}

$frutas1 = new Frutas();
$frutas1->setNome("Morango: ");
$frutas1->setTipo("Vermelha");
echo $frutas1->getNome();
echo $frutas1->getTipo();