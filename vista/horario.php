<?php include '../controlador/horaguarda.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="stylesheet" href="../modelo/bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
<br><br>
    <h1>Horario</h1>    

    <form class="row g-3 needs-validation" action= "../controlador/agregaralum.php" method="post" novalidate>
    <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Alumno:</label>
            <select name="alu" class="form-select" id="validationTooltip04" required>
                      <?php  $con = "SELECT * from alumno";
                      $consulta = mysqli_query($conectar, $cons); 
                      $arre_prod = mysqli_fetch_array($consulta);?>
              <option selected disabled value=""> <?php echo $consul['nombre'] ;?></option>
  
            </select>
            <div class="invalid-tooltip">
              Please select a valid state.
            </div>
          </div>    
    <div class="col-md-4 position-relative">
          <label for="validationTooltip01" class="form-label">Producto</label>
          <input type="text"  name="prod" class="form-control" id="validationTooltip01" value="<?php echo $consul['nombre'] ;?>" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="validationTooltip02" class="form-label">Apellido 1</label>
          <input type="text" name="ap1" class="form-control" id="validationTooltip02" value="" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Apellido 2:</label>
            <input type="text" name="ap2" class="form-control" id="validationTooltip02" value="" required>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Sexo:</label>
            <select name="sex" class="form-select" id="validationTooltip04" required>
              <option selected disabled value="">Elegir...</option>
  
            </select>
            <div class="invalid-tooltip">
              Please select a valid state.
            </div>
          </div>
        
        <div class="col-md-4 position-relative">
          <label for="validationTooltipUsername" class="form-label">Teléfono:</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">Tel:</span>
            <input type="text" name="tel" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
            <div class="invalid-tooltip">
              Please choose a unique and valid username.
            </div>
          </div>
        </div>
      
          <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">:</label>
            <input type="text" name="cur" class="form-control" id="validationTooltip02" value="" required>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
        <div class="col-md-6 position-relative">
          <label for="validationTooltip03" class="form-label">:</label>
          <input type="text" name="dir" class="form-control" id="validationTooltip03" required>
          <div class="invalid-tooltip">
            Please provide a valid city.
          </div>
        </div>
        
        <div class="col-md-3 position-relative">
          <label for="validationTooltip05" class="form-label">Fecha Nacim:</label>
          <input type="date" name="fna" class="form-control" id="validationTooltip05" required>
          <div class="invalid-tooltip">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">AGREGAR</button>
        </div>
    </form>
         <script src="../modelo/bootstrap/js/bootstrap.min.js"></script>    
</body>
</html>