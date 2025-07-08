<?php  include '../controlador/mostraralum.php';   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Alumnos</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">
        function confirmar(){
             confirm ('Desea Eliminar?');    
             }     
    </script>
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
<h1>Alumnos Inscritos</h1>
<table class="table table-dark table-striped">
<thead>
            <th>Alum</th>
            <th>Control</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Teléf</th>
            <th>Correo</th>
            <th>CURP</th>
            <th>Direc</th>
            <th>Fec Nac</th>
            <th>Modi</th>
            <th>Elim</th>
        </thead>
        <tbody>     
            <?php foreach($muestra as $renglon){ ?>
            <tr>
                <td><?php echo $renglon['id_alu'];?></td>
                <td><?php echo $renglon['con'];?></td>
                <td><?php echo $renglon['nombre'];?></td>
                <td><?php echo $renglon['genero'];?></td>
                <td><?php echo $renglon['tel'];?></td>
                <td><?php echo $renglon['correo'];?></td>
                <td><?php echo $renglon['curp'];?></td>
                <td><?php echo $renglon['dir'];?></td>
                <td><?php echo $renglon['nac'];?></td>
                <td><?php echo "<a href = 'alumnosmodifica.php?id_al=".$renglon['id_alu'].";'>Modifica</a>" ?></td>
                <td><?php echo "<a href='../controlador/eliminaalumno.php?id_al=".$renglon['id_alu']."' onclick ='return confirmar()'> Elimina </a>"; ?> </td> 
            </tr>
        </tbody>
        <?php }?>
</table>

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

        <div class="col-md-4">
          
        </div>
        <p>ISAXI Ingenieria en Sistemas Informáticos Xinaxtle</p>
        </div>
      </div>
    </footer>
    <script src="../modelo/bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 