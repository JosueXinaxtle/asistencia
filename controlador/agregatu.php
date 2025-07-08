<?php
include '../modelo/conexion.php';

$nom = $_POST['nom'];
$ape1  =$_POST['ape1'];
$ape2 = $_POST['ape2'];
$gen  =$_POST['gen'];
$dir = $_POST['dir'];
$tel  =$_POST['tel'];
$rfc = $_POST['rfc'];
$correo  =$_POST['cor'];
$curp = $_POST['curp'];

$insertar = "INSERT into docentes values('', '$nom', '$ape1', '$ape2', '$gen', '$dir', '$tel', '$rfc', '$correo', '$curp')";
$ejecutar = mysqli_query($conectar, $insertar);

if($ejecutar){ 
    echo "<script> alert('Agregado correctamente!!'); 
    location.href = '../vista/agregadocentes.html';
    </script>";
} else{
    echo "<script> alert('Falló al Agregar!!'); 
    location.href = '../vista/agregadocentes.html';
    </script>";
}
?>