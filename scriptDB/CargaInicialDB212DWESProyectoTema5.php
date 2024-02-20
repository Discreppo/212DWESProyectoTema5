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
            INSERT INTO dbs12302449.T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
                ('AAA', 'Departamento de Ventas', NOW(), 100000.50, NULL),
                ('AAB', 'Departamento de Marketing', NOW(), 50089.50, NULL),
                ('AAC', 'Departamento de Finanzas', NOW(), 600.50, '2023-11-13 13:06:00');
            INSERT INTO dbs12302449.T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
                ('admin', SHA2('adminpaso', 256), 'administrador', 'administrador'),
                ('alvaro', SHA2('alvaropaso', 256), 'Álvaro Cordero Miñambres', 'usuario'),
                ('carlos', SHA2('carlospaso', 256), 'Carlos García Cachón', 'usuario'),
                ('oscar', SHA2('oscarpaso', 256), 'Oscar Pascual Ferrero', 'usuario'),
                ('borja', SHA2('borjapaso', 256), 'Borja Nuñez Refoyo', 'usuario'),
                ('rebeca', SHA2('rebecapaso', 256), 'Rebeca Sánchez Pérez', 'usuario'),
                ('erika', SHA2('erikapaso', 256), 'Erika Martínez Pérez', 'usuario'),
                ('ismael', SHA2('ismaelpaso', 256), 'Ismael Ferreras García', 'usuario'),
                ('heraclio', SHA2('heracliopaso', 256), 'Heraclio Borbujo Moran', 'usuario'),
                ('amor', SHA2('amorpaso', 256), 'Amor Rodriguez Navarro', 'usuario');
            INSERT INTO dbs12302449.T07_Parcela (T07_CodParcela, T07_DescParcela, T07_Superficie, T07_Uso, T07_Precio, T07_FechaBaja) VALUES
                ('001', 'Parcela de maíz', 150.75, 'Regadío', 5000.00, NULL),
                ('002', 'Parcela de trigo', 200.30, 'Secano', 7000.00, NULL),
                ('003', 'Parcela de uvas', 80.50, 'Regadío', 3000.00, NULL),
                ('004', 'Parcela de papas', 120.25, 'Secano', 4500.00, NULL),
                ('005', 'Parcela de tomates', 90.80, 'Regadío', 2500.00, NULL),
                ('006', 'Parcela de cebollas', 180.60, 'Secano', 6000.00, NULL),
                ('007', 'Parcela de zanahorias', 75.40, 'Regadío', 2800.00, '2024-02-19 12:00:00'),
                ('008', 'Parcela de lechugas', 110.90, 'Secano', 4000.00, NULL),
                ('009', 'Parcela de fresas', 130.20, 'Regadío', 3500.00, NULL),
                ('010', 'Parcela de manzanas', 160.70, 'Secano', 5500.00, NULL),
                ('011', 'Parcela de peras', 100.40, 'Regadío', 3200.00, NULL),
                ('012', 'Parcela de naranjas', 140.60, 'Secano', 4700.00, NULL),
                ('013', 'Parcela de limones', 70.30, 'Regadío', 2300.00, NULL),
                ('014', 'Parcela de sandías', 190.40, 'Secano', 6500.00, NULL),
                ('015', 'Parcela de melones', 200.10, 'Regadío', 6000.00, NULL);
            CONSULTA;
    $consultaPreparada = $conn->prepare($consulta);
    $consultaPreparada->execute();

    echo "<span style='color:green;'>Valores insertados correctamente</span>"; // Mostramos el mensaje si la consulta se a ejecutado correctamente
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