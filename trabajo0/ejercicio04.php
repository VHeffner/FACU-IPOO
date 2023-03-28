<?php
function ejercicio04($arregloEnteros){
    $valMaximo=-1;
    $valMinimo=-1;
    $posMaxima=-1;
    $posMinima=-1;
    for ($i=0; $i < count($arregloEnteros); $i++) { 
        if ($valMaximo<$arregloEnteros[$i]) {
            $valMaximo=$arregloEnteros[$i];
            $posMaxima=$i;
        }elseif($valMinimo>$arregloEnteros[$i]){
            $valMinimo=$arregloEnteros[$i];
            $posMinima=$i;

        }
    }
}


