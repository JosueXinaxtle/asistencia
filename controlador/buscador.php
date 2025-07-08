<?php
include '../modelo/conexion.php';

$q = isset($_GET['q'])? $conectar->real_escape_string($_GET['q']) : '';

if($q !== '') {
    $sql = "SELECT nombre, ape1, ape2, genero, curp, naci 
            FROM alumnos WHERE 
                nombre LIKE '%$q%' OR 
                ape1 LIKE '%$q%' OR
                ape2 LIKE '%$q%' OR 
                genero LIKE '%$q%' OR 
                curp LIKE '%$q%' OR 
                naci LIKE '%$q%'
            LIMIT 10";
$result = mysqli_query($conectar, $sql);
    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            echo '<div class="sugerencia">';
            echo '<strong>' . $fila['nombre'] . ', '. $fila['ape1'] . '</strong><br>';
            echo 'Apellido: ' . $fila['ape2'] . '<br>';
            echo 'Genero: ' . $fila['genero'] . '<br>';
            echo 'CURP: ' . $fila['curp'] . '<br>';
            echo 'Fec Nac: ' . $fila['naci'];
            echo '</div>';
        }
    } else {
        echo '<div class="sugerencia">No se encontraron coincidencias</div>';
    }
}
?>
