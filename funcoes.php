<?php

$nome = "Romerito";

$exibe = function ($x) use($nome) {
    echo $x. "  - " .$nome. "<br>";
};
$array = [1, 2, 3, 5, 6, 8, 90];
array_walk($array, $exibe);

//function somar($x, $y){
  //  return $x + $y;
//}
//$valor = somar(10, 20);
//echo $valor;
?>