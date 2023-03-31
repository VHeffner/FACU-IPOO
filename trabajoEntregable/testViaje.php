<?php
include 'Viaje.php';
$obj_viaje = new Viaje(0211,"Neuquen",23);  // se crea un objeto viaje y se asigna a la variable viaje
//M  E N U 

        do {
    echo"\n◢==============================◣\n" .
        "|        MENU PRINCIPAL        |\n" .
        "¦==============================¦\n" .
        "| 1. Cargar informacion viaje  |\n" .
        "| 2. Mostrar datos del viaje   |\n" .
        "| 3. Modificar datos           |\n" .
        "| 4. Salir                     |\n" .
        "◥==============================◤\n";
        $opcion=readline();
        menu($opcion);
        } while ($opcion != 4);
        
        function menu ($opcion){
            switch ($opcion) {
                case '1':
                    break;
                case '2':
                    break;
                case '3':
                    break;
                case '4':
                    echo"Adios ";
                    break;    
                default:
                    echo"ERRROR";
                    break;
            }
        }

?>
//Implementar un script testViaje.php que cree una instancia de la clase Viaje y
 presente un menú que permita cargar la información del viaje, modificar y ver sus datos.