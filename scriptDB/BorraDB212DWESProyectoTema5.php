<?php

/**
 * @author Oscar Pascual Ferrero
 * @version 1.0
 * @since 13/12/2023
 */
try {
    define('DSN', 'mysql:host=db5014806792.hosting-data.io;dbname=dbs12302449'); // Host y nombre de la base de datos
    define('USERNAME', 'dbu2959127'); // Nombre de usuario de la base de datos
    define('PASSWORD', 'daw2_Sauces'); // Contraseña de la base de datos
    // Crear conexión
    $conn = new PDO(DSN, USERNAME, PASSWORD);

    // Creamos una variable con varias consultas a realizar
    $consulta = <<<CONSULTA
            DROP TABLE dbs12302449.T02_Departamento;
            DROP TABLE dbs12302449.T01_Usuario;
            DROP TABLE dbs12302449.T07_Parcela;
            CONSULTA;
    $consultaPreparada = $conn->prepare($consulta);
    $consultaPreparada->execute();

    echo "<span style='color:green;'>Valores borrados correctamente</span>"; // Mostramos el mensaje si la consulta se a ejecutado correctamente
} catch (PDOException $miExcepcionPDO) {
    $errorExcepcion = $miExcepcionPDO->getCode(); // Almacenamos el código del error de la excepción en la variable '$errorExcepcion'
    $mensajeExcepcion = $miExcepcionPDO->getMessage(); // Almacenamos el mensaje de la excepción en la variable '$mensajeExcepcion'

    echo "<span style='color:red;'>Error: </span>" . $mensajeExcepcion . "<br>"; // Mostramos el mensaje de la excepción
    echo "<span style='color:red;'>Código del error: </span>" . $errorExcepcion; // Mostramos el código de la excepción
    die($miExcepcionPDO);
} finally {
    // Cerrar la conexión
    if (isset($conn)) {
        $conn = null;
    }
}