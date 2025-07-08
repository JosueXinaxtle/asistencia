<?php include '../controlador/mostrarmateria.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Materias</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript">
        function Confirmr(){
            alert ('¿Desea eliminar?');
        }
    </script>
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
<h1>Docentes Inscritos</h1>

<table class="table table-dark table-striped">
<thead>
            <th>ID Materia</th>
            <th>Materia</th>
            <th>Descripción</th>
            <th>Modi</th>
            <th>Elim</th>
        </thead>
        <tbody>     
            <?php foreach($muestra as $renglon){ ?>
            <tr>                       <!--Los campos vienen de la tabla docentes-->
                <td><?php echo $renglon['id_mat'];?></td>
                <td><?php echo $renglon['materia'];?></td>
                <td><?php echo $renglon['descrip'];?></td>
                <td><?php echo "<a href = 'materiamodifica.php?id_ma= ".$renglon['id_mat'].";'>Modifica</a>" ?></td>
                <td><?php echo "<a href='../controlador/materiaelimina.php?id_ma=".$renglon['id_mat']."' onclick ='return confirmar()'> Elimina </a>"; ?> </td> 
            </tr>
        </tbody>
        <?php }?>
</table>
    <script src="../modelo/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>