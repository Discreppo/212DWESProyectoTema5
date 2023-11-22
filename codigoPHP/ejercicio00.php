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
            <h1>Ejercicio 00</h1>
        </header>
        <main>
            <h2>Variables Superglobales: </h2>
            <?php
            $key = "";
            $value = "";
            
            //echo("<p>Contenido de <span style='color:green'>" . '$GLOBALS' . "</span> es de tipo <span>" . gettype($GLOBALS) . "</span> y tiene el valor " . print_r($GLOBALS) . "</p>");
            if (isset($_SESSION)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_SESSION' . "</span> es de tipo <span>" . gettype($_SESSION) . "</span> y contiene: <br>");
                foreach ($_SESSION as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_SESSION' . "</span> esta vacia.");
            }
            echo("</p>");
            if (empty($_COOKIE)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_COOKIE' . "</span> es de tipo <span>" . gettype($_COOKIE) . "</span> y contiene: <br>");
                foreach ($_COOKIE as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_COOKIE' . "</span> esta vacia.");
            }
            echo("</p>");
            echo("<p>Contenido de <span style='color:green'>" . '$_SERVER' . "</span> es de tipo <span>" . gettype($_SERVER) . "</span> y contiene: <br>");
            foreach ($_SERVER as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            if (is_null($_GET)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_GET' . "</span> es de tipo <span>" . gettype($_GET) . "</span> y contiene: <br>");
                foreach ($_GET as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_GET' . "</span> esta vacia.");
            }
            echo("</p>");
            if (is_null($_POST)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_POST' . "</span> es de tipo <span>" . gettype($_POST) . "</span> y contiene: <br>");
                foreach ($_POST as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_POST' . "</span> esta vacia.");
            }
            echo("</p>");
            if (is_null($_FILES)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_FILES' . "</span> es de tipo <span>" . gettype($_FILES) . "</span> y contiene: <br>");
                foreach ($_FILES as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_FILES' . "</span> esta vacia.");
            }
            echo("</p>");
            if (is_null($_REQUEST)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_REQUEST' . "</span> es de tipo <span>" . gettype($_REQUEST) . "</span> y contiene: <br>");
                foreach ($_REQUEST as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_REQUEST' . "</span> esta vacia.");
            }
            echo("</p>");
            if (is_null($_ENV)) {
                echo("<p>Contenido de <span style='color:green'>" . '$_ENV' . "</span> es de tipo <span>" . gettype($_ENV) . "</span> y contiene: <br>");
                foreach ($_ENV as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span style='color:red'>" . '$_ENV' . "</span> esta vacia.");
            }
            echo("</p>");
            echo "</div>";
            ?>        
            <h2>phpinfo(): </h2>
            <?php
            /**
             * @author Oscar Pascual Ferrero
             * @version 1.0 
             * @since 22/11/2023
             */
            phpinfo();
            ?>

    </main>
    <footer>
        <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
        <p><a href="../indexProyectoTema5.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
    </footer>
</body>
</html>