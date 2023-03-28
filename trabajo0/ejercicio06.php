Dado un número que se corresponde a un año calendario,
 retornar un arreglo con todos los años bisiestos
menores al año ingresado.
Nota: Un año es bisiesto cuando es múltiplo de cuatro,
 exceptuando los múltiplos de 100 que no lo sean de
400. 7

<?php
function anioBiciesto ($anio,$hasta){
    $arrayAnioBiciesto[$anio];
    for ($i=$hasta; $i < $anio ; $i++) { 
        if($i%4==0 && $i%100!=0){
            $arrayAnioBiciesto[$i]=$i;
        }
    }
    print_r($arrayAnioBiciesto);

}

$hasta=0;
$anio=2023;
anioBiciesto($anio,$hasta);