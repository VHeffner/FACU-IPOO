<?php
include_once("Categoria.php");
include_once("Torneo.php");
include_once("Equipo.php");
include_once("Partido.php");
include_once("Futbol.php");
include_once("Basquet.php");

$catMayores = new Categoria(1, 'Mayores');
$catJuveniles = new Categoria(2, 'Juveniles');
$catMenores = new Categoria(3, 'Menores');

$objE1 = new Equipo("Equipo Uno", "Cap.Uno", 1, $catMayores);
$objE2 = new Equipo("Equipo Dos", "Cap.Dos", 2, $catMayores);

$objE3 = new Equipo("Equipo Tres", "Cap.Tres", 3, $catJuveniles);
$objE4 = new Equipo("Equipo Cuatro", "Cap.Cuatro", 4, $catJuveniles);

$objE5 = new Equipo("Equipo Cinco", "Cap.Cinco", 5, $catMayores);
$objE6 = new Equipo("Equipo Seis", "Cap.Seis", 6, $catMayores);

$objE7 = new Equipo("Equipo Siete", "Cap.Siete", 7, $catJuveniles);
$objE8 = new Equipo("Equipo Ocho", "Cap.Ocho", 8, $catJuveniles);

$objE9 = new Equipo("Equipo Nueve", "Cap.Nueve", 9, $catMenores);
$objE10 = new Equipo("Equipo Diez", "Cap.Diez", 9, $catMenores);

$objE11 = new Equipo("Equipo Once", "Cap.Once", 11, $catMayores);
$objE12 = new Equipo("Equipo Doce", "Cap.Doce", 11, $catMayores);

$torneo = new Torneo(100000);

// Crear partidos de básquet
$partido1 = new Basquet(11, '2024-05-05', $objE7, 80, $objE8, 120, 7);
$partido2 = new Basquet(12, '2024-05-06', $objE9, 81, $objE10, 110, 8);
$partido3 = new Basquet(13, '2024-05-07', $objE11, 115, $objE12, 85, 9);

// Crear partidos de fútbol
$partido4 = new Futbol(14, '2024-05-07', $objE1, 3, $objE2, 2);
$partido5 = new Futbol(15, '2024-05-08', $objE3, 0, $objE4, 1);
$partido6 = new Futbol(16, '2024-05-09', $objE5, 2, $objE6, 3);

$torneo->ingresarPartido($objE5, $objE11, '2024-05-23', 'Futbol');
$torneo->ingresarPartido($objE11, $objE11, '2024-05-23', 'Basquet');
$torneo->ingresarPartido($objE9, $objE10, '2024-05-25', 'Basquet');

echo "Ganadores de Basquet:\n";
print_r($torneo->darGanadores('Basquet'));

echo "Ganadores de Futbol:\n";
print_r($torneo->darGanadores('Futbol'));

echo "Premios de los partidos:\n";
foreach ([$partido1, $partido2, $partido3, $partido4, $partido5, $partido6] as $partido) {
    print_r($torneo->calcularPremioPartido($partido));
}

print_r($torneo);