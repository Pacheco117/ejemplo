<?php
// Variables
include_once 'valor.php';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM libros;');
// Ejecuta consulta
$miConsulta->execute()
?>