<?php
include '../modelo/conexion.php';

$usu = $_POST['correo'];
$con = $_POST['contra'];
$nom = $_POST['nom'];

$inserta = "INSERT into usuarios values ('', '$usu', '$con', '$nom')";
$ejecuta = mysqli_query($conectar, $inserta);

if($ejecuta){
echo "<script> alert('Agregado al sistema!!');
location.href = '../index.php';
</script>";
} else{
    echo "<script> alert('Error al agregar al sistema!!');
location.href = '../index.php
';
</script>";
}

?>