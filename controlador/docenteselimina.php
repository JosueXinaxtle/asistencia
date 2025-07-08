<?php
include '../modelo/conexion.php';

$id_do = $_GET['id_do'];  // id_do viene de variable en docentesmuestra.php
$eliminar = "DELETE from docentes where id_doc= '".$id_do."' ";
$ejecuta = mysqli_query($conectar, $eliminar);

if($ejecuta){
    echo "<script> alert ('Docente Borrado!!');
    location.href ='../vista/docentesmuestra.php';
    </script>"; 
} else{
    echo "<script> alert ('Error al Borrar!!');
    location.href ='../vista/docentesmuestra.php';
    </script>"; 
}
?>