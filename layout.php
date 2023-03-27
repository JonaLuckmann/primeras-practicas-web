<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="/proyecto viejo/css/estilos.css">
</head>

<body>

    <header>
        <h2>💻 Portafolio de Prácticas - Analista de Sistemas</h2>
        <nav>
            <a href="/proyecto viejo/index.php">🏠 Inicio</a>
            <a href="/proyecto viejo/index.php?run=ejercicio3">📧 Validación Email</a>
            <a href="/proyecto viejo/index.php?run=formulario_registro">📝 Registro (Form)</a>
            <a href="/proyecto viejo/index.php?run=ejercicio5">📊 Notas Alumnos</a>
            <a href="/proyecto viejo/index.php?run=supermercado">🛒 Supermercado</a>
        </nav>
    </header>

    <main>
        <?php echo $contenido; ?>
    </main>

    <footer style="text-align: center; margin-top: 30px; color: #64748b; font-size: 0.85em;">
        <p>Entorno de Desarrollo Local Apache (Ubuntu) — 2026</p>
    </footer>

</body>

</html>