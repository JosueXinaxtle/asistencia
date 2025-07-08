<?php include '../modelo/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Docentes</title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php    
if(isset($_POST['enviar'])){
$id_mat = $_POST['id_ma'];
$mate = $_POST['mat'];
$desc = $_POST['desc'];

$inserta = "UPDATE materias set materia = '$mate', descrip ='$desc' where id_mat = '$id_mat' ";
mysqli_query($conectar, $inserta);
if($inserta){
    echo "<script>  alert ('Actualizado');
    location.href = 'materiamuestra.php';  
    </script>";
}   else{
echo "<script>  alert ('Incorrecto');
    location.href = 'materiamuestra.php';  
    </script>";
}
} else{

    $id_ma = $_GET['id_mat'];
    $consulta = "SELECT * from materias  where id_mat = '".$id_ma."' ";
    $resul = mysqli_query($conectar, $consulta);
    $arre = mysqli_fetch_assoc($resul);
    $mate = $arre['materia'];
    $desc = $arre['descrip'];
mysqli_close($conectar);
 ?>

<form class="row g-3 needs-validation" action="<?=$_SERVER['PHP_SELF']?>" method="post" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Docente</label>
          <input type="text" class="form-control" name="nom" id="validationCustom01" value = "<?php echo $doc; ?>" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Apellido 1:</label>
          <input type="text" class="form-control" name="ape1" id="validationCustom02" value="<?php echo $ape1; ?>" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
      </form>
      <?php   }    ?>
</body>
</html>