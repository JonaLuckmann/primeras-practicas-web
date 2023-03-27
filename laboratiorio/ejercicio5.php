<?php
// Datos multidimensionales del ejercicio
$alumnos = [
    ["nombre" => "Carlos Gómez", "carrera" => "Sistemas", "notas" => [8, 7, 9, 6]],
    ["nombre" => "Ana Martínez", "carrera" => "Sistemas", "notas" => [5, 4, 6, 5]],
    ["nombre" => "Lucas Rodríguez", "carrera" => "Telecomunicaciones", "notas" => [9, 10, 9, 10]],
    ["nombre" => "María Belén", "carrera" => "Sistemas", "notas" => [4, 7, 8, 5]]
];

$contador_aprobados = 0;
$contador_desaprobados = 0;
$mejor_promedio = -1;
$mejor_alumno_nombre = "";

echo "<table>";
echo "<tr><th>Nombre</th><th>Carrera</th><th>Promedio</th><th>Estado</th></tr>";

foreach ($alumnos as $alumno) {
    $promedio = array_sum($alumno["notas"]) / count($alumno["notas"]);

    if ($promedio >= 6) {
        $estado = "<span class='aprobado'>Aprobado</span>";
        $contador_aprobados++;
    } else {
        $estado = "<span class='desaprobado'>Desaprobado</span>";
        $contador_desaprobados++;
    }

    if ($promedio > $mejor_promedio) {
        $mejor_promedio = $promedio;
        $mejor_alumno_nombre = $alumno["nombre"];
    }

    echo "<tr>";
    echo "<td>" . $alumno["nombre"] . "</td>";
    echo "<td>" . $alumno["carrera"] . "</td>";
    echo "<td>" . number_format($promedio, 2) . "</td>";
    echo "<td>" . $estado . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>Resultados Métricos del Análisis:</h3>";
echo "<ul>";
echo "<li>Total Aprobados: <strong>$contador_aprobados</strong></li>";
echo "<li>Total Desaprobados: <strong>$contador_desaprobados</strong></li>";
echo "<li>🏆 Mayor promedio detectado: <strong>$mejor_alumno_nombre</strong> (" . number_format($mejor_promedio, 2) . ")</li>";
echo "</ul>";
