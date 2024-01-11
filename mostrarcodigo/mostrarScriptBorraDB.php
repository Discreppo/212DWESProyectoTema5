<!DOCTYPE html>
<html lang="es">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oscar Pascual Ferrero</title>
        <link rel="stylesheet" href="../webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="../webroot/image/botonFavicon.png">
    </head>
    <body>
        <header>
            <h1>Código Script Borrar</h1>
        </header>

        <main>
            <!-- Contenido principal de tu sitio web -->
           <pre>
        <code>
            <?php
            $ruta_archivo_sql = '../scriptDB/BorraDB212DWESProyectoTema5.sql';
            if (file_exists($ruta_archivo_sql)) {
                echo htmlspecialchars(file_get_contents($ruta_archivo_sql));
            } else {
                echo 'El archivo SQL no existe.';
            }
            ?>
        </code>
    </pre>

        </main>

        <footer>
            <p><a href="../../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema5.php">Inicio</a> | <a href="https://github.com/Discreppo/212DWESProyectoTema5.git" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>