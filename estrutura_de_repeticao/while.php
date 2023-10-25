<?php

$i = 2;
while ($i<= 20){
    echo $i;
    $i+=2;
    echo "\n";
}

/* sintaxe alternativa */

$i = 2;
while($i <= 20):
    echo $i;
    $i+=2;
    echo "\n";
endwhile;
