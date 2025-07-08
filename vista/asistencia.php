<?php include '../modelo/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<nav class="bg-dark navbar navbar-expand-lg bg-body-tertiary " >
  <div class="container-fluid" >
    <a class="navbar-brand text-light" href="agregaralu.html"> ISAXI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Asistencia
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="asistencia.php">Agregar</a></li>
            <li><a class="dropdown-item" href="asistenciamuestra.php">Mostrar </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Submódulos</a></li>
          </ul>
        </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="agregaralu.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Especialidad
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregaespe.html">Agregar</a></li>
            <li><a class="dropdown-item" href="mostrarespe.php">Mostrar </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Submódulos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Docentes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregadocentes.html">Agregar Docentes</a></li>
            <li><a class="dropdown-item" href="docentesmuestra.php">Mostrar Docentes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Materias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregamateria.html">Agregar</a></li>
            <li><a class="dropdown-item" href="materiamuestra.php">Mostrar </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Submódulos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CITAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregacitas.php">Agregar</a></li>
            <li><a class="dropdown-item" href="mostrarcitas.php">Mostrar </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Submódulos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Turno
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregaturno.html">Agregar</a></li>
            <li><a class="dropdown-item" href="turnomuestra.php">Mostrar </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Submódulos</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary text-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
  <div class="col-12 pt-4 pb-4 text-primary text-center">
    <h1 class=" ">Guardar Asistencia</h1>
  </div>
  <form class="row g-3 needs-vaidation  m-3 " action="../controlador/asistenciaagrega.php" method="POST">
    
          <?php date_default_timezone_set('America/Mexico_City'); 
           $fecha = date('Y-m-d');        $hora = date('H:i:s');   ?> 
        <div class="col-md-2">
        <label for="" class="form-label">Hoy es:</label>
          <input class="form-input" type="text" name="fecha" value="<?php echo $fecha; ?> ">  
       </div>
        <div class="col-md-2">  
          <label for="" class="form-label">Hora:</label>
          <input type="text" name="hor" id="hor" class="form-input" value="<?php echo $hora;?>" ><br><br>
         </div>     
      
       <div class="col-md-3">
          <label for="alumno_id" class="form-label">Turno:</label>
          <?php $seleccion = "SELECT * from turno";
          $consulta = mysqli_query($conectar, $seleccion);
          $arreglo = mysqli_fetch_array($consulta); ?>
          <select class="form-select" name="id_turno" id="id_turno">
            <option value="">Seleccione:</option>
            <?php foreach ($consulta as $renglon) { ?>  
              <option value="<?php echo $renglon['id_turno']; ?>"><?php echo $renglon['turno']; ?></option>
            <?php } ?> 
        </select> 
        </div>

        <div class="col-md-4">
        <label for="" class="form-label">Especialidad:</label>
        <?php $seleccion = "SELECT * from espe";
        $consulta = mysqli_query($conectar, $seleccion);
        $arreglo = mysqli_fetch_array($consulta); ?>
        <select class="form-select" name="id_espe" id="id_espe">
          <option value="">Seleccione:</option>
            <?php foreach ($consulta as $renglon) { ?>
                <option value="<?php echo $renglon['id_espe']; ?>"><?php echo $renglon['espe']; ?></option>
            <?php } ?>
        </select>
        </div>

        <div class="col-md-3">
        <label for="alumno_id" class="form-label">Docente:</label>
        <?php $seleccion = "SELECT * from docentes";
        $consulta = mysqli_query($conectar, $seleccion);
        $arreglo = mysqli_fetch_array($consulta);       ?>
        <select class="form-select" name="id_doc" id="id_doc">
          <option value="">Seleccione:</option>
            <?php foreach ($consulta as $renglon) { ?>
                <option value="<?php echo $renglon['id_doc']; ?>"><?php echo $renglon['docente']; ?></option>
            <?php } ?>
        </select>
        </div>

        <div class="col-md-2">
        <?php $seleccion = "SELECT * from grado";
        $consulta = mysqli_query($conectar, $seleccion);
        $arreglo = mysqli_fetch_array($consulta);       ?>
        <label for="" class="form-label">Grado:</label>
        <select name="id_grado" id="id_grado" class="form-select">
          <option value="">Seleccione:</option>
            <?php foreach ($consulta as $renglon) { ?>
                <option value="<?php echo $renglon['id_grado']; ?>"><?php echo $renglon['grado']; ?></option>
            <?php } ?>
        </select>
        </div>

        <div class="col-md-2">
        <?php $seleccion = "SELECT * from grupo";
        $consulta = mysqli_query($conectar, $seleccion);
        $arreglo = mysqli_fetch_array($consulta);       ?>
        <label for="" class="form-label">Grupo:</label>
        <select name="id_grupo" id="" class="form-select">
          <option value="">Seleccione:</option>
            <!-- Carga de alumnos base de datos -->
            <?php foreach ($consulta as $renglon) { ?>
                <option value="<?php echo $renglon['id_grupo']; ?>"><?php echo $renglon['grupo']; ?></option>
            <?php } ?>
            <!-- Agrega más opciones de alumnos aquí -->
        </select>
        </div>

        <div class="col-md-4">
        <label for="alumno_id" class="form-label">Materia:</label>
        <?php $seleccion = "SELECT * from materias";
        $consulta = mysqli_query($conectar, $seleccion);
        $arreglo = mysqli_fetch_array($consulta); ?>
        <select name="id_mat" id="id_mat" class="form-select">
          <option value="">Seleccione:</option>
            <!-- Carga de alumnos base de datos -->
            <?php foreach ($consulta as $renglon) { ?>
                <option value="<?php echo $renglon['id_mat']; ?>"><?php echo $renglon['materia']; ?></option>
            <?php } ?>
        </select>
        </div>
        
        <div class="col-md-4">
        <?php $seleccion = "SELECT * from alumnos";
        $consulta = mysqli_query($conectar, $seleccion);
        $arreglo = mysqli_fetch_array($consulta);       ?>
        <label for="alumno_id" class="form-label">Alumno:</label>
        <select class="form-select" name="id_alu" id="id_alu">
          <option value="">Seleccione:</option>
            <!-- Carga de alumnos base de datos -->
            <?php foreach ($consulta as $renglon) { ?>
                <option value="<?php echo $renglon['id_alu']; ?>"><?php echo $renglon['nombre']; ?></option>
            <?php } ?>
            <!-- Agrega más opciones de alumnos aquí -->
        </select>
        </div>

        <div class="col-md-2">
        <label for="" class="form-label">Hora:</label>
        <input class="form-input" type="time" name="hora" id=""  required>
        </div>

        <div class="col-md-2">
        <label for="estado" class="form-label">Asistencia:</label>
        <select name="asis" class="form-select" id="">
            <option value="1">Presente</option>
            <option value="0">Ausente</option>
            <option value=".5">Tarde</option>
        </select>
        </div>
        
        <?php foreach ($consulta as $renglon) { ?>
        <?php } ?>
        <div class="col-12 pt-4 pb-4 text-center">
        <button class="btn btn-primary col-lg-4" type="submit">Guardar</button>
        </div>
    </form> 

    <footer class="bg-dark text-primary pt-5 pb-4">
      <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-light">
            <h6 class="text-uppercase mb-3 fontweight-bold text-light text-center"><a class="text-light" href="asistencia.php">Asistencia</a> </h6>
            <hr class="mb-2">
            <p class="text-center"><a class="text-light" href="asistencia.php">Guardar Asistencia</a></p>
            <p class="text-center"><a class="text-light" href="asistenciamuestra.php">Mostrar Asistencias</a></p>
      
            <h6 class="text-uppercase mb-3 mt-5 fontweight-bold text-light text-center"><a class="text-light" href="#">Especialidad</a> </h6>
            <hr class="mb-2">
            <p class="text-center"><a class="text-light" href="#">Agregar Especialidad</a></p>
            <p class="text-center"><a class="text-light" href="#">Ver Especialidad</a></p>
          </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 fontweight-bold text-light">
          <h6 class="text-uppercase mb-3 fontweigth-bold text-center text-light">Alumnos</h6>
          <hr class="mb-2">
          <p class="text-center"><a class="text-light" href="agregaralu.html">Agregar Alumnos</a></p>
          <p class="text-center"><a class="text-light" href="alumnosmuestra.php">Ver Alumnos</a></p>
          
          <h6 class="text-uppercase mb-3 mt-5 text-center textweigth-bold text-light">Docentes</h6>
          <hr class="mb-2">
          <p class="text-center"><a class="text-light" href="agregadocentes.html">Agregar Docentes</a></p>
          <p class="text-center"><a class="text-light" href="docentesmuestra.php">Mostrar Docentes</a></p>
        </div> 
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-light fontweight-bold ">
          <h6 class="text-uppercase mb-3 fontweight-bold text-center text-light">Materias</h6>
          <hr class="mb-2">
          <p class="text-center"><a class="text-light" href="agregamateria.html">Agregar Materias</a></p>
          <p class="text-center"><a class="text-light" href="materiamuestra.php">Ver Materias </a></p>

          <h6 class="text-uppercase text-light mb-3 mt-5 textweight-bold text-center">Turno</h6>
          <hr class="mb-2">
          <p class="text-center"><a class="text-light" href="agregaturno.html">Agregar Turno</a></p>
          <p class="text-center"><a class="text-light" href="turnomuestra.php">Mostrar Turno</a></p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-light fontweight-bold">
          <h6 class="text-uppercase mb-3 fontweight-bold text-center text-light">Contacto</h6>
          <hr class="mb-2">
          <p><a class="text-light" href="#"><li class="fas fa-home me-3"></li>isaxi</a></p>
          <p><a class="text-light" href="#"><li class="fas fa-envelope me-3"></li>joxcsa@gmail.com</a></p>
          <p><a class="text-light" href="#"><li class="fas fa-phone me-3"></li>221 111 7565</a></p>
          <p><a class="text-light" href="#"><li class="fa-solid fa-location-dot me-3"></li>Ubicación</a></p>
        </div>
        <hr class="mb-4">
        <div class="text-center mb-4">
          <p class="text-light"><a href="terminos.html">Terminos y Condiciones.</a> &copy;Derechos de Autor.
          <a href="#">isaxi</a> Toluca, Edo. Méx. 2013-2025 <a href="privacidad.html">Aviso de Privacidad</a> <a href="ayuda.php">Ayuda</a>
         </p>
        </div>

      </div>
     </div>
    </footer>
    
    <script src="../modelo/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>