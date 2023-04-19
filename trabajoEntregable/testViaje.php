<?php
include 'Viaje.php';
$obj_viaje=new Viaje(0,"",0,null);
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
                    modificar_datos($obj_viaje);
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
            $persona_responsable=cargar_persona_responsable();
            $obj_viaje=new Viaje($codigo_viaje,$destino,$cantidad_maxima_pasajeros,$persona_responsable);
            info_pasajero($total_pasajeros,$obj_viaje);
            return $obj_viaje;
        }
        function cargar_persona_responsable(){
            echo"\nIngrese numero empleado";
            $numero_empleado=readline();
            echo"\nIngrese numero Licencia";
            $numero_licencia=readline();
            echo "\nIngrese nombre empleado";
            $nombre=readline();
            echo"\nIngrese apellido empleado";
            $apellido=readline();
            $obj_responsableV=new ResponsableV($numero_empleado,$numero_licencia,$nombre,$apellido);
            return $obj_responsableV;

            
        }
        function info_pasajero($total_pasajeros,$obj_viaje){
            for ($i=0; $i <$total_pasajeros ; $i++) { //Recorro la cantidad maxima de pasajeros veces

                do { //Lo hago siempre y cuando exista dni, es decir, que ya tengo una persona con ese dni en array_pasajeros (que es de obj_viaje)
                    echo"Ingrese Nombre: \n";
                    $nombre=readline();
                    echo"Ingrese Apellido: \n";
                    $apellido=readline();
                    echo"Ingrese Dni: \n";
                    $dni=readline();
                    echo"Ingrese telefono";
                    $telefono=readline();

                    $iterador = 0;
                    $dni_existe = false;
                    while(($iterador < count($obj_viaje->getArray_pasajeros)) && !$dni_existe){
                        //Recorro todas las personas que ya agregue al array_pasajeros buscando ver si el DNI ya lo tiene otro pasajero
                        if($dni == $obj_viaje->getArray_pasajeros[$iterador]->getDni){
                            $dni_existe = true;
                        }
                        $iterador++;
                    }

                } while ($dni_existe);

                $obj_viaje->agregar_pasajero($nombre,$apellido,$dni,$telefono);
                
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
            "| 4. Modificar datos de un pasajero       |\n" .
            "| 5. Modificar datos responsable viaje    |\n" .
            "| 6. Salir                                |\n" .
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
                    for ($i=0; $i <count($obj_viaje->getArray_pasajeros) ; $i++) { 
                        echo "\n indice pasajero: ".($i+1);//se le suma uno solo por una cuestion estetica
                        $pasajeroEni = $obj_viaje->getArray_pasajeros[$i];                      
                        echo $pasajeroEni->__toString;
                         }
                         echo"Ingrese indice que desee cambiar";
                         $indice=readline()-1;//Es por una cuestion estetica
                         cambiar_dato_pasajero($indice,$obj_viaje);
                    break;
                case '5': 
                $obj_responsableV=cargar_persona_responsable();
                $obj_viaje->setPersona_responsable($obj_responsableV);

                    break;
                case '6':
                    echo"Adios ";
                    break;    
                default:
                    echo"ERROR";
                    break;
            }
        
        } while ($i!=4);

        }
        function cambiar_dato_pasajero($indice,$obj_viaje){
            echo"Ingrese nombre: \n";
            $nombre=readline();
            echo"Ingrese apellido: \n";
            $apellido=readline();
            echo"Ingrese D.N.I: \n";
            $dni=readline();
            echo"Ingrese telefono: \n";
            $telefono=readline();
            $objPasajero= new Pasajero($nombre,$apellido,$dni,$telefono);
            $obj_viaje->getArray_pasajeros[$indice]=$objPasajero;
        }
