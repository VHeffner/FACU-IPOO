<?php

//E J E R C I C I O   0 1

/* function obtenerFactorial ($numero){
    $factorial=1;
    for($i=1; $i<=$numero; $i++){
        $factorial=$factorial*$i;
    }
    return $factorial;

    }
//Prueba de que funciona el ejercicio 01
$numero=5;
$resultado= obtenerFactorial($numero);
echo "el Factorial de: ",$numero," Es: ",$resultado;


//E J E R C I C I O   0 2

function esPar ($numero){
    return $numero%2==0;   
} 


//E J E R C I C I O   0 3 

function esDivisible($n,$m){
    return $n%$m==0;
}


//E J E R C I C I O   0 4

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


//E J E R C I C I O   0 5

$n=4;
leerNombres($n);
function leerNombres($n){
    $array[$n];
    for ($i=0; $i < $n; $i++) {
        echo "name: \n";
        $array[$i]=readline();
    }
    print_r($array);
}

//E J E R C I C I O   0 6
function anioBiciesto ($anio,$hasta){
    $arrayAnioBiciesto[$anio];
    for ($i=$hasta; $i < $anio ; $i++) { 
        if($i%4==0 && $i%100!=0){
            $arrayAnioBiciesto[$i]=$i;
        }
    }
    print_r($arrayAnioBiciesto);

}

//Prueba de que el ejercicio 06 funciona
$hasta=0;
$anio=2023;
anioBiciesto($anio,$hasta);


//E J E R C I C I O   0 7 

function unionArray($arrayA,$arrayB){
    $n=count($arrayA)+count($arrayB);
    $arrayUnion[$n];
    for ($i=0; $i < $n; $i++) { 
        if($i < count($arrayA)){
            $arrayUnion[$i]=$arrayA[$i];
        }else{
            $arrayUnion[$i]=$arrayB[$i-count($arrayA)];
        }
    }
    print_r($arrayUnion);
}

//prueba de que el ejercicio 07 funciona

$arrayA[3];
$arrayB[3];
for ($i=0; $i < 3; $i++) { 
    $arrayA[$i] = $i;
    $arrayB[$i] = $i;
}
unionArray($arrayA,$arrayB);


//E J E R C I C I O   0 8

function unionArray($arrayA,$arrayB){
    $n=count($arrayA)+count($arrayB);
    $arrayUnion[$n];
    for ($i=0; $i < $n; $i++) { 
        if($i < count($arrayA)){
            $arrayUnion[$i]=$arrayA[$i];
        }else{
            $j=0;
            while ($arrayUnion[$j] != null ) {
                if ($arrayUnion[$j] != $arrayB[$i-count($arrayA)]) {
                    $arrayUnion[$i] = $arrayB[$i-count($arrayA)];
                }
                $j++;
            }
        }
    }
    print_r($arrayUnion);
}

$arrayA[3];
$arrayB[3];
for ($i=0; $i < 3; $i++) { 
    $arrayA[$i] = $i;
    $arrayB[$i] = $i;
}
unionArray($arrayA,$arrayB); */