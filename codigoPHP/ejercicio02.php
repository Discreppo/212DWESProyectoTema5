<?php
/**
 * @author Oscar Pascual Ferrero
 * @version 1.0
 * @since 22/11/2023
 */
// Incluyo la configuración de conexión a la BD
require_once '../config/confDBPDO.php';

try {
    // Conexión con la base de datos
    $miDB = new PDO(DSN, USERNAME, PASSWORD);

    // Verificar si las credenciales de autenticación básica están presentes
    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
        // Solicitar autenticación básica y enviar código de respuesta 401 Unauthorized si no se proporcionan
        header('WWW-Authenticate: Basic realm="Acceso restringido"');
        header('HTTP/1.1 401 Unauthorized');
        echo 'Se requieren credenciales para acceder a esta página.';
        echo "<button><a href='http://daw212.isauces.local/212DWESProyectoTema5/indexProyectoTema5.php'>Volver al home</a></button>";
        exit();
    }

    $usuario = $_SERVER['PHP_AUTH_USER'];
    $contrasena = $_SERVER['PHP_AUTH_PW'];

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario = ? AND T01_Password = ?";
    $stmt = $miDB->prepare($sql);
    $stmt->execute([$usuario, hash('sha256', $usuario . $contrasena)]);

    $result = $stmt->fetch(PDO::FETCH_OBJ);

    // Si las credenciales son válidas
    if ($result) {
        $nombre_usuario = $result->T01_CodUsuario;
        $num_conexiones = $result->T01_NumConexiones;
        $ultima_conexion = $result->T01_FechaHoraUltimaConexion;

        // Incrementar el número de conexiones
        $num_conexiones++;

        // Actualizar la fecha y hora de la última conexión
        $sqlUpdate = "UPDATE T01_Usuario SET T01_NumConexiones = ?, T01_FechaHoraUltimaConexion = CURRENT_TIMESTAMP WHERE T01_CodUsuario = ?";
        $stmtUpdate = $miDB->prepare($sqlUpdate);
        $stmtUpdate->execute([$num_conexiones, $nombre_usuario]);

        echo "<p>Bienvenido, $nombre_usuario!</p>";
        echo "<p>Esta es la $num_conexiones vez que te conectas y te conectaste por última vez el $ultima_conexion.</p>";
    } else {
        // Si las credenciales son incorrectas, enviar código de respuesta 401 Unauthorized
        header('HTTP/1.1 401 Unauthorized');
        echo 'Credenciales incorrectas. Acceso denegado.';
        echo "<button><a href='http://daw212.isauces.local/212DWESProyectoTema5/indexProyectoTema5.php'>Volver al home</a></button>";
    }
} catch (PDOException $e) {
    // Manejar errores de conexión a la base de datos
    die("Error en la conexión: " . $e->getMessage());
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
            <h1>Ejercicio 02</h1>
        </header>
        <main>            
        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema5.php">Inicio</a> | <a href="https://github.com/Discreppo/212DWESProyectoTema5.git" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>
