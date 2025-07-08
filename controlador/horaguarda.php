<?php 
include '../modelo/conexion.php';

$cons = "SELECT * from horario";
$consul = mysqli_query($conectar, $cons);
$arreglo = mysqli_fetch_array($consul);


?>