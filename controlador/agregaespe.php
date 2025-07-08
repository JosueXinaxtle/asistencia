<?php
include '../modelo/conexion.php';

$espe = $_POST['espe'];


$insertar = "INSERT into espe values('', '$espe')";
$ejecutar = mysqli_query($conectar, $insertar);

if($ejecutar){ 
    echo "<script> alert('Agregado correctamente!!'); 
    location.href = '../vista/agregaespe.html';
    </script>";
} else{
    echo "<script> alert('Falló al Agregar!!'); 
    location.href = '../vista/agregaespe.html';
    </script>";
}
?>