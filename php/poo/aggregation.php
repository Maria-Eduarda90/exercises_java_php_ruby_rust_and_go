<?php

class Produto {
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach ($this->produtos as $produto){
            echo $produto->nome.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}

$produto1 = new Produto("Notebook", "4500");
$produto2 = new Produto("mouse", "40");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();