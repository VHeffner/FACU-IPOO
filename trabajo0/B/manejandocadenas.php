<?php
function cadenaCaracteres($cadena){
    if ($cadena[strlen($cadena)-1] == ".") {
        $contador="";
    for ($i=0; $i < strlen($cadena) ; $i++) { 
        if(($cadena[$i]>=69 && $cadena[$i]<=90) || ($cadena[$i]>=97 && $cadena[$i]<=122)){
            $contador=$contador+$cadena[$i];
        }
        echo " 1 ",$contador;
    }
    }
}
$cadena="prueba .";
cadenaCaracteres($cadena);