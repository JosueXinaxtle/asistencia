<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="asistencia.php"> Internet Sistemas y Administración Xinaxtle ISAXI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="asistencia.php">Asistencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="mostrarasis.php">Mostrar Asist</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light"  href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alumnos
                </a>
                <ul class="dropdown-menu text-light" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="agregaralu.html">Agregar Alumnos</a></li>
                  <li><a class="dropdown-item" href="alumnosmuestra.php">Mostrar Alumnos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Docentes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="agregadocentes.html">Agregar Docentes </a></li>
                  <li><a class="dropdown-item" href="docentesmuestra.php">Mostrar Docentes</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Materia
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="agregamateria.html">Agregar Materia</a></li>
                  <li><a class="dropdown-item" href="materiamuestra.php">Mostrar Materia</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Agregar Grupos</a></li>
                </ul>
              </li>
           
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Turno
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="agregaturno.html">Agregar Turno</a></li>
                  <li><a class="dropdown-item" href="turnomuestra.php">Mostrar Turno</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Agregar Grupos</a></li>
                </ul>
              </li>
            
            </ul>
            <form class="d-flex">
              <input class="form-control me-2 text-light" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

       <div class="col-12 pt-4 text-primary">
        <h1 class="text-center ">Soporte </h1>
      </div>
        <form class="row g-3 pb-3 needs-validation" action="../controlador/agregadocente.php" method="post" novalidate>
        
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Docente</label>
          <input type="text" class="form-control" name="nom" id="validationCustom01" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        </form>

</body>
</html>