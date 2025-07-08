<?php
include '../modelo/conexion.php';
$idturno = $_POST['id_turno'];
$idalu = $_POST['id_alu'];
$iddoc = $_POST['id_doc'];
$idmat = $_POST['id_mat'];
$idespe = $_POST['id_espe'];
$idgrado = $_POST['id_grado'];
$idgrupo = $_POST['id_grupo'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$asis = $_POST['asis'];
// Insertar los datos en la base de datos
$sql = "INSERT INTO asis VALUES ('','$idalu','$idturno', '$idespe', '$iddoc', '$idgrado', '$idgrupo','$idmat', '$asis', '$fecha', '$hora' )";
$quey = mysqli_query($conectar, $sql);
if($quey){
    echo "<script> alert('Asistencia correcto!!');
    location.href='../vista/asistencia.php';
    </script>";
  } else{
      echo "<script> alert('Error al guardar!!');
      location.href='../vista/asistencia.php';
      </script>";
}




    /*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $idturno = $_POST['id_turno'];
    $idalu = $_POST['id_alu'];
    $iddoc = $_POST['id_doc'];
    $idmat = $_POST['id_mat'];
    $idespe = $_POST['id_espe'];
    $idgrado = $_POST['id_grado'];
    $idgrupo = $_POST['id_grupo'];
    $alumno = $_POST['alumno'];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $asis = $_POST['asis'];
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO asistencia VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la declaración
    $stmt = $conectar->prepare($sql);
    if ($stmt === false) {
        die("Error al guardar la Asistencia: " . $conn->error);
    }
    // Vincular los parámetros
    $stmt->bind_param(  '', $idturno, $idalu, $iddoc, $idmat,$idespe, $idgrado, $idgrupo, $alumno, $hora, $fecha, $asis);
    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "Asistencia guardada con éxito.";
    } else {
        echo "Error al guardar la asistencia: " . $stmt->error;
    }
    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}*/
?>