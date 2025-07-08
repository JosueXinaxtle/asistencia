<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="modelo/estilos.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="button-box">
                <div id="elegir"></div>
                <button type="button" class="to-btn" onclick="login()">Iniciar Sesión</button>
                <button type="button" class="to-btn" onclick="registrar()">Registrar</button>
            </div>
            <div class="redes-sociales">
                <img src="img/fb.png" alt="logo facebook">
                <img src="img/twitter.png" alt="instagram">
                <img src="img/insta.png" alt="twitter">  
            </div>
            <form id="login" action="controlador/sesion.php" class="input-group" method="post">
            <?php  if (isset($_GET['error'])) { ?>
        <p class="error">
          <?php echo $_GET['error']     ?>
        </p>
        <?php   }  ?>
                <input type="text" class="input-field" name="correo" placeholder="Correo" required>
                <input type="password" class="input-field" class="contra" placeholder="Contraseña" required>
                <input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
                <button type="submit" class="submit-btn">Acceder</button>
            </form>
            <form id="registrar" action="controlador/regusu.php" method="post" class="input-group">
                <input type="text" class="input-field" name="nom" placeholder="Nombre " required>
                <input type="email" class="input-field" name="correo" placeholder="Correo" required>
                <input type="password" class="input-field" name="contra" placeholder="Contraseña" required>
                <input type="checkbox" class="check-box"><span>Acepto Términos y Condiciones</span>
                <button type="submit" class="submit-btn">Registrar</button>
            </form>
        </div>
    </div>
<script>
    var x = document.getElementById("login");
    var y = document.getElementById("registrar");
    var z = document.getElementById("elegir");
    
    function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
    }

    function registrar(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="120px";
    }
</script>
</body>
</html>