<?php
include '../modelo/conexion.php';
$sql = "SELECT * from alumnos";
$muestra = mysqli_query($conectar, $sql);
$arreglo = mysqli_fetch_array($muestra);
?>