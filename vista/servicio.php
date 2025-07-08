<?php include '../modelo/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtro de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Buscar Alumnos</h2>
              <!-- Formulario de filtros -->
    <form method="GET" class="row g-3 mb-4">
        <?php
        function generarSelect($conectar, $tabla, $campo, $name) {
            $res = $conectar->query("SELECT id, $campo AS nombre FROM $tabla");
            echo "<div class='col-md-4'><label class='form-label'>".ucfirst($name)."</label><select name='$name' class='form-select'>";
            echo "<option value=''>Todos</option>";
            while($row = $res->fetch_assoc()) {
                $selected = ($_GET[$name] ?? '') == $row['id'] ? 'selected' : '';
                echo "<option value='{$row['id']}' $selected>{$row['nombre']}</option>";
            }
            echo "</select></div>";
        }

        generarSelect($conectar, "grados", "nivel", "grado");
        generarSelect($conectar, "grupos", "nombre", "grupo");
        generarSelect($conectar, "especialidades", "nombre", "especialidad");
        generarSelect($conectar, "turnos", "nombre", "turno");
        generarSelect($conectar, "materias", "nombre", "materia");
        generarSelect($conectar, "docentes", "nombre", "docente");
        ?>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </form>

    <!-- Resultados -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Grado</th>
                    <th>Grupo</th>
                    <th>Especialidad</th>
                    <th>Turno</th>
                    <th>Materia</th>
                    <th>Docente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $filtros = [];

                if (!empty($_GET['grado'])) $filtros[] = "alumnos.grado_id = " . intval($_GET['grado']);
                if (!empty($_GET['grupo'])) $filtros[] = "alumnos.grupo_id = " . intval($_GET['grupo']);
                if (!empty($_GET['especialidad'])) $filtros[] = "alumnos.especialidad_id = " . intval($_GET['especialidad']);
                if (!empty($_GET['turno'])) $filtros[] = "alumnos.turno_id = " . intval($_GET['turno']);
                if (!empty($_GET['materia'])) $filtros[] = "inscripciones.materia_id = " . intval($_GET['materia']);
                if (!empty($_GET['docente'])) $filtros[] = "inscripciones.docente_id = " . intval($_GET['docente']);

                $where = count($filtros) ? "WHERE " . implode(" AND ", $filtros) : "";

                $sql = "
                    SELECT alumnos.nombre AS alumno,
                           grados.nivel AS grado,
                           grupos.nombre AS grupo,
                           especialidades.nombre AS especialidad,
                           turnos.nombre AS turno,
                           materias.nombre AS materia,
                           docentes.nombre AS docente
                    FROM alumnos
                    JOIN grados ON alumnos.grado_id = grados.id
                    JOIN grupos ON alumnos.grupo_id = grupos.id
                    JOIN especialidades ON alumnos.especialidad_id = especialidades.id
                    JOIN turnos ON alumnos.turno_id = turnos.id
                    JOIN inscripciones ON alumnos.id = inscripciones.alumno_id
                    JOIN materias ON inscripciones.materia_id = materias.id
                    JOIN docentes ON inscripciones.docente_id = docentes.id
                    $where
                    ORDER BY alumnos.nombre
                ";

                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['alumno']}</td>
                            <td>{$row['grado']}</td>
                            <td>{$row['grupo']}</td>
                            <td>{$row['especialidad']}</td>
                            <td>{$row['turno']}</td>
                            <td>{$row['materia']}</td>
                            <td>{$row['docente']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No se encontraron resultados</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
