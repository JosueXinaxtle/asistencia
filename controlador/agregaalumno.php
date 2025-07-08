<?php
include '../modelo/conexion.php';

$con = $_POST['control'];
$nom = $_POST['nom'];
$gen = $_POST['gen'];
$tel = $_POST['tel'];
$cor = $_POST['cor'];
$curp = $_POST['curp'];
$dir = $_POST['dir'];
$nac = $_POST['nac'];

$insertar = "INSERT into alumnos values('', '$con', '$nom', '$gen', '$tel', '$cor', '$curp', '$dir', '$nac')";
$ejecuta = mysqli_query($conectar, $insertar);
if($ejecuta){ 
   echo "<script> alert('Agregado correcto!!');
   location.href = '../vista/agregaralu.html';
   </script>";
} else{
    echo "<script> alert('Error al Agregar!!');
    location.href = '../vista/agregaralu.html';
    </script>";
}

?>