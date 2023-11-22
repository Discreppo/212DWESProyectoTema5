<?php
// Asegurar que no se almacene en caché la respuesta
$url_actual = urlencode($_SERVER['REQUEST_URI']);
// Verificar las credenciales (usuario: admin, contraseña: paso)
if (
        !isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW']) ||
        $_SERVER['PHP_AUTH_USER'] != 'admin' ||
        $_SERVER['PHP_AUTH_PW'] != 'paso'
) {
    // Credenciales incorrectas
    //Guarda la url de la pagina actual
    $_SESSION['prev_url'] = $_SERVER['REQUEST_URI'];
    header('WWW-Authenticate: Basic realm="Acceso restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<p>Error de autenticacion<p>";
    //Le damos la opcion al usuario de volver al home diante este enlace
    echo "<button><a href='http://daw212.isauces.local/212DWESProyectoTema5/indexProyectoTema5.php'>Volver al home</a></button>";
    
    exit();
} else {
    // Credenciales válidas
    echo "Bienvenido, {$_SERVER['PHP_AUTH_USER']}";
    echo "Esta es la  N vez que se conecta y se conectó la última vez Y";
}
?>
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
            <h1>Ejercicio 01</h1>
        </header>
        <main>
            <?php
            /**
             * @author Oscar Pascual Ferrero
             * @version 1.0
             * @since 22/11/2023             
             * 
             * @Annotation Desarrollo de un control de acceso con identificación del usuario basado en la función header().
             * ProyectoTema5
             * 
             */
            ?>
        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema5.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>