#Dado dos números N y M retornar verdadero si el número N es divisible por M y
#falso en caso contrario.
<?php
function esDivisible($n,$m){
    return $n%$m==0;
}
