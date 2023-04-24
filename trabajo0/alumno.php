<?php

// Arreglo de ejemplo con datos de los alumnos
$arregloFavorito = array(
    array("nrolegajo" => 1, "codigoMateria" => "matematica", "notaObtenida" => 8),
    array("nrolegajo" => 2, "codigoMateria" => "historia", "notaObtenida" => 7),
    array("nrolegajo" => 3, "codigoMateria" => "geografia", "notaObtenida" => 10),
    array("nrolegajo" => 4, "codigoMateria" => "matematica", "notaObtenida" => 9),
    array("nrolegajo" => 5, "codigoMateria" => "historia", "notaObtenida" => 6)
);

// Función para obtener la cantidad de alumnos que rindieron una materia específica
function obtenerCantidadAlumnosPorMateria($arregloFavorito, $materia) {
    $cantidad = 0;
    foreach ($arregloFavorito as $alumno) {
        if ($alumno["codigoMateria"] === $materia) {
            $cantidad++;
        }
    }
    return $cantidad;
}

// Función para obtener el porcentaje de alumnos que rindieron una materia específica
function obtenerPorcentajeAlumnosPorMateria($arregloFavorito, $materia) {
    $cantidadTotal = count($arregloFavorito);
    $cantidadMateria = obtenerCantidadAlumnosPorMateria($arregloFavorito, $materia);
    $porcentaje = ($cantidadMateria / $cantidadTotal) * 100;
    return $porcentaje;
}

// Función para obtener la información del alumno con la mayor nota en una materia específica
function obtenerAlumnoMayorNotaPorMateria($arregloFavorito, $materia) {
    $mayorNota = -1;
    $alumnoMayorNota = null;
    foreach ($arregloFavorito as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"] > $mayorNota) {
            $mayorNota = $alumno["notaObtenida"];
            $alumnoMayorNota = $alumno;
        }
    }
    return $alumnoMayorNota;
}

// Ejemplo de uso de las funciones

// a) Obtener la cantidad de alumnos que rindieron una materia específica
$materia = "matematica";
$cantidadAlumnos = obtenerCantidadAlumnosPorMateria($arregloFavorito, $materia);
echo "Cantidad de alumnos que rindieron la materia $materia: $cantidadAlumnos" . PHP_EOL;

// b) Obtener el porcentaje de alumnos que rindieron una materia específica
function obtenerPorcentajeAlumnosPorMateria($arregloFavorito, $materia) {
    $cantidadTotal = count($arregloFavorito);
    $cantidadMateria = obtenerCantidadAlumnosPorMateria($arregloFavorito, $materia);
    $porcentaje = ($cantidadMateria / $cantidadTotal) * 100;
    return $porcentaje;
}

// c) Obtener la información del alumno con la mayor nota en una materia específica
function obtenerAlumnoMayorNotaPorMateria($arregloFavorito, $materia) {
    $mayorNota = -1;
    $alumnoMayorNota = null;
    foreach ($arregloFavorito as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"] > $mayorNota) {
            $mayorNota = $alumno["notaObtenida"];
            $alumnoMayorNota = $alumno;
        }
    }
    return $alumnoMayorNota;
}

// d) Obtener la cantidad de alumnos aprobados por materia (nota >= 7)
function obtenerCantidadAlumnosAprobadosPorMateria($arregloFavorito, $materia) {
    $cantidad = 0;
    foreach ($arregloFavorito as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"] >= 7) {
            $cantidad++;
        }
    }
    return $cantidad;
}



    // e) Obtener un arreglo con los alumnos que aprobaron una materia específica
function obtenerAlumnosAprobadosPorMateria($arregloFavorito, $materia) {
    $alumnosAprobados = array();
    foreach ($arregloFavorito as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"] >= 7) {
            $alumnosAprobados[] = $alumno;
        }
    }
    return $alumnosAprobados;
}

// f) Obtener el o los números de legajo de los alumnos que aprobaron más de cuatro materias
function obtenerNumerosLegajoAlumnosAprobadosMasDeCuatroMaterias($arregloFavorito) {
    $numerosLegajo = array();
    $aprobadasPorAlumno = array();
    foreach ($arregloFavorito as $alumno) {
        $nroLegajo = $alumno["nrolegajo"];
        if (!in_array($nroLegajo, $numerosLegajo)) {
            $numerosLegajo[] = $nroLegajo;
        }
        if ($alumno["notaObtenida"] >= 7) {
            if (!isset($aprobadasPorAlumno[$nroLegajo])) {
                $aprobadasPorAlumno[$nroLegajo] = 0;
            }
            $aprobadasPorAlumno[$nroLegajo]++;
        }
    }
    $numerosLegajoAprobadosMasDeCuatroMaterias = array();
    foreach ($aprobadasPorAlumno as $nroLegajo => $cantidadAprobadas) {
        if ($cantidadAprobadas > 4) {
            $numerosLegajoAprobadosMasDeCuatroMaterias[] = $nroLegajo;
        }
    }
    return $numerosLegajoAprobadosMasDeCuatroMaterias;
}

// g) Obtener un arreglo con las materias aprobadas por un alumno específico
function obtenerMateriasAprobadasPorAlumno($arregloFavorito, $nroLegajo) {
    $materiasAprobadas = array();
    foreach ($arregloFavorito as $alumno) {
        if ($alumno["nrolegajo"] === $nroLegajo && $alumno["notaObtenida"] >= 7) {
            $materiasAprobadas[] = $alumno["codigoMateria"];
        }
    }
    return $materiasAprobadas;
}

// Ejemplo de uso:
$nroLegajo = 1;
$materiasAprobadas = obtenerMateriasAprobadasPorAlumno($arregloFavorito, $nroLegajo);

echo "Materias aprobadas por el alumno con número de legajo $nroLegajo: " . implode(", ", $materiasAprobadas);