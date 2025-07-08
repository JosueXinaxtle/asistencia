<?php include '../controlador/mostrardocente.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Docentes</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript">
        function Confirmar(){
            alert ('¿Desea eliminar?');
        }
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="agregaralu.html">ISAXI</a>
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
<div class="text-center text-primary">
<h1>Docentes Inscritos</h1>
</div>
<table class="table table-dark table-striped">
<thead>
            <th >ID</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>RFC</th>
            <th>Correo</th>
            <th>CURP</th>
            <th>Modi</th>
            <th>Elim</th>
        </thead>
        <tbody>     
            <?php foreach($muestra as $renglon){ ?>
            <tr>                       <!--Los campos vienen de la tabla docentes-->
                <td><?php echo $renglon['id_doc'];?></td>
                <td><?php echo $renglon['docente'];?></td>
                <td><?php echo $renglon['sexo'];?></td>
                <td><?php echo $renglon['dir'];?></td>
                <td><?php echo $renglon['tel'];?></td>
                <td><?php echo $renglon['rfc'];?></td>
                <td><?php echo $renglon['correo'];?></td>
                <td><?php echo $renglon['curp'];?></td>
                <td><?php echo "<a href = 'docentesmodifica.php?id_do= ".$renglon['id_doc'].";'>Modifica</a>" ?></td>
                <td><?php echo "<a href='../controlador/docenteselimina.php?id_do=".$renglon['id_doc']."' onclick ='return confirmar()'> Elimina </a>"; ?> </td> 
            </tr>
        </tbody>
        <?php }?>
</table>
    <script src="../modelo/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>