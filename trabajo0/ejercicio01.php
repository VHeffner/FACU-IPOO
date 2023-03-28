<?php
function obtenerFactorial ($numero){
    $factorial=1;
    for($i=1; $i<=$numero; $i++){
        $factorial=$factorial*$i;
    }
    return $factorial;

    }
$numero=5;
$resultado= obtenerFactorial($numero);
echo "el Factorial de: ",$numero," Es: ",$resultado;