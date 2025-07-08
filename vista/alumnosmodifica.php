<?php  include "../modelo/conexion.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Alumnos</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
</head>
<body>      
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="agregaralu.html">Internet Sistemas y Administración Xinaxtle ISAXI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="asistencia.php">Asistencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="agregaralu.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregaralu.html">Agregar Alumnos</a></li>
            <li><a class="dropdown-item" href="alumnosmuestra.php">Mostrar Alumnos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Docentes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregadocentes.html">Agregar Docentes</a></li>
            <li><a class="dropdown-item" href="docentesmuestra.php">Mostrar Docentes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
    <?php         //"enviar" viene de atributo name del boton
    if(isset($_POST['enviar'])){     
        $id=$_POST['id_alum']; //Este id_alum viene del name de input del formulario de abajo
        $con = $_POST['ctrol'];
        $nom =$_POST['nom'];     //Atributos vienen de formulario aquí abajo
        $gen  =$_POST['gen'];
        $tel  =$_POST['tel'];
        $cor  =$_POST['cor'];
        $curp = $_POST['curp'];
        $dir = $_POST['dir'];
        $nac = $_POST['nac'];
        $sql = "UPDATE alumnos set con = '$con', nombre = '$nom', genero = '$gen', tel='$tel', correo = '$cor', curp= '$curp', dir='$dir', nac = '$nac' where id_alu = '$id' ";
        mysqli_query($conectar, $sql);
        if($sql){
            echo "<script>  alert ('Actualizado');
                  location.href = 'alumnosmuestra.php';  
                  </script>";
          }   else{
              echo "<script>  alert ('Incorrecto');
                  location.href = 'alumnosmuestra.php';  
                  </script>";
          }
    } else{
        $id = $_GET['id_al'];  //id_al viene de alumnosmuestra.php 
        $sql = "SELECT * from alumnos where id_alu = '".$id."' ";
        $resultado = mysqli_query($conectar, $sql);
        $row = mysqli_fetch_assoc($resultado);
        $con = $row['con'];    //valores vienen de la tabla mysql
        $nom = $row['nombre'];
        $gen  = $row['genero'];
        $tel  = $row['tel'];
        $cor  = $row['correo'];
        $curp = $row['curp'];
        $dir = $row['dir'];
        $nac = $row['nac'];
        mysqli_close($conectar);
    ?>
    <h1>Modificando Alumnos</h1>
    <form class="row g-3 needs-validation" action="<?=$_SERVER['PHP_SELF']?>" method="post" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">No. Control</label>
          <input type="text" class="form-control" name="ctrol" id="" value="<?php echo $con; ?>" required>
       </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nom" id="" value="<?php echo $nom; ?>" required>
        </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Genero:</label>
            <input class="form-control" value=" <?php echo $gen ; ?>" name="gen"  id="validationCustom04" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustomUsername" class="form-label">Teléfono:</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">Tel</span>
                <input type="text" class="form-control" name="tel" value="<?php echo $tel;?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
              <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Correo:</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" name="cor" value="<?php echo $cor; ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">CURP:</label>
            <input type="text" class="form-control" name="curp" id="validationCustom02" value="<?php echo $curp; ?>" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Dirección:</label>
            <input type="text" class="form-control" name="dir" id="validationCustom02" value="<?php echo $dir; ?>" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Fecha Nac</label>
            <input type="date" class="form-control" name="nac" id="validationCustom02" value="<?php echo $nac; ?>" required>
          </div>       
          <input type="hidden" name="id_alum" id="" value="<?php echo $id  ;?> " >
        <div class="col-12"> 
          <button class="btn btn-primary" name="enviar" type="submit">Guardar</button>
        </div>
      </form>     
            <?php   }    ?>
    <script src="../modelo/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>