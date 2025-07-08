<?php
include '../modelo/conexion.php';

$mat = $_POST['mat'];
$desc  =$_POST['desc'];


$insertar = "INSERT into materias values('', '$mat', '$desc')";
$ejecutar = mysqli_query($conectar, $insertar);

if($ejecutar){ 
    echo "<script> alert('Agregado correctamente!!'); 
    location.href = '../vista/agregamateria.html';
    </script>";
} else{
    echo "<script> alert('Falló al Agregar!!'); 
    location.href = '../vista/agregamateria.html';
    </script>";
}
?>