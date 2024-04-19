<?php
// Variables
include_once 'valor.php';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
try {
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
$miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Establecer el modo de error a excepción
// Obtiene codigo del libro a borrar
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : null;
// Prepara DELETE
$miConsulta = $miPDO->prepare('DELETE FROM libros WHERE codigo =
:codigo');
// Ejecuta la sentencia SQL
$miConsulta->execute(['codigo' => $codigo
]);
// Redireccionamos al PHP con todos los datos
header('Location: index.php');
exit(); // Asegurar que el script se detenga después de redireccionar
} catch(PDOException $e){
    echo "Error al conectar a la base de datos: " . $e->getMessage();
// Manejar el error de conexión de alguna manera adecuada, como registrar o mostrar un mensaje de error al usuario
}
?>