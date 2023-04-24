<?php
//Dada una cadena de caracteres terminada en punto retornar la cantidad de letras que contiene la cadena


/***Para contar la cantidad de letras en una cadena de caracteres en PHP podemos usar la función strlen() que devuelve la longitud de la cadena.
*  Sin embargo, esto incluirá espacios en blanco y otros caracteres que no son letras. Por lo tanto, necesitamos eliminar esos caracteres antes de contar.
*  Podemos hacer uso de la función str_replace() para reemplazar los caracteres no deseados por una cadena vacía,
*   de esta forma solo quedan las letras en la cadena y podemos aplicar la función strlen() para conocer su longitud.**/

/* function cadenaCaracteres($cadena){
$cadena = 'Hola mundo.';
$cadena_sin_punto = substr($cadena, 0, -1); // Eliminamos el último caracter, el punto
$cadena_sin_espacios = str_replace(' ', '', $cadena_sin_punto); // Eliminamos los espacios en blanco
$cantidad_letras = strlen($cadena_sin_espacios);
return $cantidad_letras;
} */

//Dado un texto terminado en / y un caracter, determinar cuántas veces aparece ese caracter en la cadena

/**Se puede utilizar la función count_chars() en PHP para contar el número de veces que aparece un carácter en una cadena.
 * Por ejemplo, si $texto es la cadena dada y $caracter es el carácter dado,
 * se puede usar lo siguiente para contar el número de veces que aparece el carácter: */
/* function 
$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit/";
$caracter = "a";
$num_veces = substr_count($texto, $caracter);
echo "El carácter '" . $caracter . "' aparece " . $num_veces . " veces en el texto.";
 */
// Dada 2 cadenas cadena1 y cadena2 retornar verdadero si cadena2 se encuentra en cadena1 y falso en caso contrario.

/**La función strpos() en PHP devuelve la posición de la primera ocurrencia de una subcadena dentro de una cadena dada.
 *  Si la subcadena no se encuentra, la función devuelve false.
 *  Por lo tanto, en este caso comprobamos si la función devuelve algo diferente a false para determinar si cadena2 se encuentra en cadena1.
 *  La comparación !== se utiliza para asegurarnos de que el valor devuelto no sea en sí mismo false,
 *  ya que de lo contrario podría interpretarse como falso en una comparación estricta. */


$cadena1 = "Hoy es un buen día";
$cadena2 = "buen";

if (strpos($cadena1, $cadena2) !== false) {
  echo "cadena2 se encuentra en cadena1";
} else {
  echo "cadena2 no se encuentra en cadena1";
}


//Dada una cadena retornar su longitud sin utilizar la función count de PHP

/**Puede utilizar un bucle para recorrer la cadena y contar los caracteres manualmente:**/
/* 
php
Copy code
function longitud_cadena($cadena) {
    $longitud = 0;
    for ($i = 0; isset($cadena[$i]); $i++) {
        $longitud++;
    }
    return $longitud;
} */

/* $cadena = "Hola mundo";
echo longitud_cadena($cadena); */ // salida: 10

/**El bucle va sumando 1 a la variable $longitud en cada iteración hasta que no haya más caracteres en la cadena (cuando $cadena[$i] sea null). */

// Dada 2 cadenas cadena1 y cadena2 retornar la cadena de mayor longitud, invocar al método implementado para el inciso anterior
/**Para implementar una función en PHP que reciba dos cadenas y retorne la cadena de mayor longitud, podemos hacer lo siguiente:

php
Copy code
function cadena_mas_larga($cadena1, $cadena2) {
    if (strlen($cadena1) >= strlen($cadena2)) {
        return $cadena1;
    } else {
        return $cadena2;
    }
}
Esta función utiliza la función strlen() de PHP para obtener la longitud de cada cadena, y luego compara esas longitudes usando un condicional if/else. Si la longitud de la primera cadena es mayor o igual a la longitud de la segunda cadena, se retorna la primera cadena; de lo contrario, se retorna la segunda cadena.

Para invocar a esta función con dos cadenas dadas, simplemente hay que pasar esas cadenas como argumentos, como por ejemplo:

bash
Copy code
$cadena1 = "Hola";
$cadena2 = "Mundo";

$cadena_mas_larga = cadena_mas_larga($cadena1, $cadena2);

echo $cadena_mas_larga; // imprime "Mundo" */































































































































































































































































































































































































































