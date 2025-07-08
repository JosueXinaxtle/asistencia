<?php
include '../modelo/conexion.php';

$turno = $_POST['turno'];


$insertar = "INSERT into turno values('', '$turno')";
$ejecutar = mysqli_query($conectar, $insertar);

if($ejecutar){ 
    echo "<script> alert('Agregado correctamente!!'); 
    location.href = '../vista/agregaturno.html';
    </script>";
} else{
    echo "<script> alert('Falló al Agregar!!'); 
    location.href = '../vista/agregaturno.html';
    </script>";
}
?>