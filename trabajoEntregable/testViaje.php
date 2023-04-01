<?php
include 'Viaje.php';
$obj_viaje=new Viaje(0,"",0);
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
        menu($opcion,$obj_viaje);
        } while ($opcion != 4);
        
        function menu ($opcion,$obj_viaje){
            
            switch ($opcion) {
                case '1':
                    $obj_viaje=carga_informacion_viaje();
                    break;
                case '2':
                    echo $obj_viaje->__toString();
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
            echo"Ingrese codigo de viaje: ";
            $codigo_viaje=readline();
            echo"Ingrese destino de viaje: ";
            $destino=readline();
            echo"Ingrese cantidad maxima de pasajeros";
            $cantidad_maxima_pasajeros=readline();
            echo"Ingrese cantidad Total de pasajeros";
            $total_pasajeros=readline();
            $obj_viaje=new Viaje($codigo_viaje,$destino,$cantidad_maxima_pasajeros);
            info_pasajero($total_pasajeros,$obj_viaje);
            return $obj_viaje;
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
        function modificar_datos($obj_viaje){
        do {
      echo"\n◢========================================◣\n" .
            "|        MENU MODIFICAR                   |\n" .
            "¦=========================================¦\n" .
            "| 1. Modificar cantidad maxima pasajeros  |\n" .
            "| 2. Modifica codigo de viaje             |\n" .
            "| 3. Modificar destino de viaje           |\n" .
            "| 4. Salir                                |\n" .
            "◥========================================◤\n";
            $i=readline();
            switch ($i) {
                case '1':
                    echo"Ingrese el valor que desee reescribir:";
                    $obj_viaje->setCantidad_maxima_pasajero(readline());
                    break;
                case '2':
                    $obj_viaje->setCodigo_viaje(readline());
                    break;
                case '3':
                    $obj_viaje->setDestino(readline());
                    break;
                case '4':
                    echo"Adios ";
                    break;    
                default:
                    echo"ERROR";
                    break;
            }
        
        } while ($i!=4);

        }


?>
//Implementar un script testViaje.php que cree una instancia de la clase Viaje y
 presente un menú que permita cargar la información del viaje, modificar y ver sus datos.