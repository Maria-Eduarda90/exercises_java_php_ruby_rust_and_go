<?php

require 'classes/Produto.php';
require 'models/produto.php';

use classes\Produto as productClasses;
use models\Produto as productModels;

$produto = new productClasses();
$produto->mostrarDetalhes();

echo "<br>";

$produto = new productModels();
$produto->mostrarDetalhes();