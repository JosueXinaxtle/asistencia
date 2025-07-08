<?php
include '../modelo/conexion.php';

$sql = "SELECT * from materias";
$muestra = mysqli_query($conectar, $sql);
$arreglo = mysqli_fetch_array($muestra);
?>