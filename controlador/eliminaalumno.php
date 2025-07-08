<?php
include '../modelo/conexion.php';
$id_alum = $_GET['id_al'];
$eliminar = "DELETE from alumnos where id_alu = '".$id_alum."' ";
$consulta = mysqli_query($conectar, $eliminar);

if($consulta){
echo  "<script> alert ('Borrado correcto!!');
location.href = '../vista/alumnosmuestra.php';
</script>";
} else{
    echo  "<script> alert ('Error al Borrar!!');
location.href = '../vista/alumnosmuestra.php';
</script>";
}
?>