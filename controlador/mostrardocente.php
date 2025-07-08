<?php
include '../modelo/conexion.php';

$sql = "SELECT * from docentes";
$muestra = mysqli_query($conectar, $sql);
$arreglo = mysqli_fetch_array($muestra);
?>