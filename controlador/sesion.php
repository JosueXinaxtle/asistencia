<?php
    session_start();
    include '../modelo/conexion.php';
if (isset($_POST['correo']) && isset($_POST['contra'])) {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
      $correo = validate($_POST['correo']);
      $clave = validate($_POST['contra']);
      if (empty($correo)) {
        header("Location: ../index.php?error=El correo de usuario es requerido ");
        exit();
      }elseif (empty($clave)) {
        header("Location: ../index.php?error=La clave es requerido ");
        exit();
      }else {
        //$clave = md5($clave);
        $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contra='$clave'";
        $result = mysqli_query($conectar, $sql);
        if (mysqli_num_rows($result) ===1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['correo'] === $correo && $row['contra'] === $clave) {
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['id_usu'] = $row['id_usu'];
                header("Location: ../vista/agregaralu.html");
                exit();
            }else {
                header("Location: ../index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        }else {
            header("Location: ../index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
      }
} else {
    header("Locatio: ../index.php");
    exit();
}