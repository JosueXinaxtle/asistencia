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
$id_do = $_POST['id_docen'];
$nom = $_POST['nom'];
$gen  =$_POST['gen'];
$dir = $_POST['dir'];
$tel  =$_POST['tel'];
$rfc = $_POST['rfc'];
$correo  =$_POST['cor'];
$curp = $_POST['curp'];

$inserta = "UPDATE docentes set docente = '$nom', sexo='$gen', dir ='$dir', tel='$tel', rfc ='$rfc', correo='$correo', curp ='$curp'  where id_doc = '$id_do'";
mysqli_query($conectar, $inserta);
if($inserta){
    echo "<script>  alert ('Actualizado');
    location.href = 'docentesmuestra.php';  
    </script>";
}   else{
echo "<script>  alert ('Incorrecto');
    location.href = 'docentesmuestra.php';  
    </script>";
}
} else{

    $id_do = $_GET['id_do'];
    $consulta = "SELECT * from docentes  where id_doc = '".$id_do."' ";
    $resul = mysqli_query($conectar, $consulta);
    $arre = mysqli_fetch_assoc($resul);
    $doc = $arre['docente'];
    $sexo = $arre['sexo'];
    $dir = $arre['dir'];
    $tel = $arre['tel'];
    $rfc = $arre['rfc'];
    $correo = $arre['correo'];
    $curp = $arre['curp'];
mysqli_close($conectar);
 ?>

<form class="row g-3 needs-validation" action="<?=$_SERVER['PHP_SELF']?>" method="post" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Docente</label>
          <input type="text" class="form-control" name="nom" id="validationCustom01" value = "<?php echo $doc; ?>" required>
        </div>  

          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Genero:</label>
                      <input type="text" class="form-control" name="gen" id="validationCustom01" value = "<?php echo $sexo; ?>" required>  
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Dirección:</label>
            <input type="text" class="form-control" name="dir" id="validationCustom02" value="<?php echo $dir; ?>" required>
          </div>

          <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Teléfono:</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Tel</span>
            <input type="text" class="form-control" name="tel" value="<?php echo $tel; ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">RFC:</label>
            <input type="text" class="form-control" name="rfc" id="validationCustom02" value="<?php echo $rfc;?>" required>
          </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Correo:</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" class="form-control" name="cor" value="<?php echo $correo; ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">CURP:</label>
            <input type="text" class="form-control" name="curp" id="validationCustom02" value="<?php echo $curp; ?>" required>
            <div class="valid-feedback">
            </div>
          </div>  
          <input type="hidden" name="id_docen" id="" value="<?php echo $id_do; ?>" >
        <div class="col-12">
          <button class="btn btn-primary" name="enviar" type="submit">Guardar</button>
        </div>
      </form>
      <?php   }    ?>
</body>
</html>