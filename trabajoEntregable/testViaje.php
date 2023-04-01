<?php
include 'Viaje.php';
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
        function carga_informacion_viaje(){
            echo"Ingrese codigo de viaje: "
            $codigo_viaje=readline();
            echo"Ingrese destino de viaje: ";
            $destino=readline();
            echo"Ingrese cantidad maxima de pasajeros";
            $cantidad_maxima_pasajeros=readline();
            echo"Ingrese cantidad Total de pasajeros";
            $total_pasajeros=readline();
            $obj_viaje=new Viaje($codigo_viaje,$destino,$cantidad_maxima_pasajeros);
            info_pasajero($total_pasajeros,$obj_viaje);
        }
        function info_pasajero($total_pasajeros,$obj_viaje){
            for ($i=0; $i <$total_pasajeros ; $i++) { 
                echo"Ingrese Nombre: \n";
                $nombre=readline();
                echo"Ingrese Apellido: \n";
                $apellido=readline();
                echo"Ingrese Dni: \n";
                $dni=readline();
                $obj_viaje->setAgregar_pasajero($nombre, $apellido, $dni);
            }
        }

?>
//Implementar un script testViaje.php que cree una instancia de la clase Viaje y
 presente un menú que permita cargar la información del viaje, modificar y ver sus datos.