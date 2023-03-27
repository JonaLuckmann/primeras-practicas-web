<?php
// Capturamos el parámetro de la URL. Si no hay ninguno, vamos al inicio.
$seccion = $_GET['run'] ?? 'inicio';
$titulo = "Portafolio - " . ucfirst($seccion);

// Activamos el buffer de memoria para "grabar" el HTML generado
ob_start();

if ($seccion === 'inicio') {
    // MENÚ DE BIENVENIDA DEL PORTAFOLIO
    echo "<h1>📂 Panel de Análisis de Algoritmos</h1>";
    echo "<p>Este entorno modular unifica todos los laboratorios de la materia, demostrando la separación de la lógica de negocio respecto a la capa de presentación.</p>";

    echo "<h3>Módulos de Software Disponibles:</h3>";
    echo "<table>";
    echo "<tr><th>Módulo</th><th>Descripción del Backend</th><th>Acción</th></tr>";
    echo "<tr><td><strong>Ejercicio 3</strong></td><td>Procesamiento y parseo de cadenas (Strings) para validación de emails.</td><td><a href='index.php?run=ejercicio3'>Ejecutar ➔</a></td></tr>";
    echo "<tr><td><strong>Ejercicio 4</strong></td><td>Capa de entrada externa mediante formulario HTTP POST y sanitización.</td><td><a href='index.php?run=formulario_registro'>Ejecutar ➔</a></td></tr>";
    echo "<tr><td><strong>Ejercicio 5</strong></td><td>Procesamiento de estructuras multidimensionales y búsqueda de máximos.</td><td><a href='index.php?run=ejercicio5'>Ejecutar ➔</a></td></tr>";
    echo "<tr><td><strong>Supermercado</strong></td><td>Control de stock y procesamiento de vectores indexados.</td><td><a href='index.php?run=supermercado'>Ejecutar ➔</a></td></tr>";
    echo "</table>";
} elseif ($seccion === 'formulario_registro') {
    // CASO ESPECIAL: Si piden el formulario del Ejercicio 4, cargamos la vista HTML limpia
    echo "<h3>Formulario de Entrada Externa (Ejercicio 4)</h3>";
    echo "<p><a href='index.php'>← Volver al Panel</a></p>";

    // Incluimos el formulario HTML limpio que tenías separado
    include "formularios/form_registro.html";
} else {
    // CASO GENERAL: Buscamos el algoritmo de lógica pura en la carpeta laboratorios
    $ruta_laboratorio = "laboratorios/" . $seccion . ".php";

    if (file_exists($ruta_laboratorio)) {
        echo "<div class='badge-info'>";
        echo "<strong>Modo Laboratorio:</strong> Analizando el comportamiento de: <code>$ruta_laboratorio</code>";
        echo " | <a href='index.php'>Volver al Menú Principal</a>";
        echo "</div>";

        // Ejecutamos la lógica interna del ejercicio
        include $ruta_laboratorio;
    } else {
        echo "<h2>✗ Error 404: El módulo solicitado no existe en el sistema.</h2>";
        echo "<p><a href='index.php'>Volver al inicio</a></p>";
    }
}

// Volcamos la memoria en la variable y renderizamos el marco visual
$contenido = ob_get_clean();
include "layout.php";
