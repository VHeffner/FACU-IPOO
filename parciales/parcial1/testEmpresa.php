<?php
$objCliete1=new Cliente("Juan","Padron",true,"dni",40111602);
$objCliete2=new Cliente("Veronica","Heffner",false,"dni",41286582);
$obBicicleta1=new Bicicleta(11,89500,2022,"Splinplin",85,true);
$obBicicleta2=new Bicicleta(12,310000,2021,"tuturraca",70,true);
$obBicicleta3=new Bicicleta(13,10000,2023,"pspsp",55,false);
$objEmpresa=new Empresa("alta gama","Avenida argentina 123",[$objCliete1,$objCliete2],[$obBicicleta1,$obBicicleta2,$objBicleta3],[]);
$objEmpresa->registrarVenta([11,12,13],$objCliete2);
$objEmpresa->registrarVenta([0],$objCliete2);
$objEmpresa->registrarVenta([2],$objCliete2);
$objEmpresa->retornar_ventas_Xcliente("dni",40111602);
$objEmpresa->retornar_ventas_Xcliente("dni",41286582);
echo $objEmpresa;
