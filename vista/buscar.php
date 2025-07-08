<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #resultado {
            position: absolute;
            z-index: 999;
            width: 100%;
        }
        .sugerencia {
            padding: 10px;
            background:rgb(151, 178, 206);
            border-bottom: 1px solidrgb(19, 61, 104);
            cursor: pointer;
        }
        .sugerencia:hover {
            background-color:rgb(142, 178, 214);
        }
    </style>
</head>
<body class="p-5">
    <div class="container">
        <h5 class="mb-4 text-primary">Buscar Alumnos</h5>
        <div class="mb-3 position-relative">
            <input type="text" id="busqueda" class="form-control" placeholder="Buscar por nombre, apellido, dir...">
            <div id="resultado"></div>
        </div>
    </div>
    <script>
        const inputBusqueda = document.getElementById('busqueda');
        const divResultado = document.getElementById('resultado');

        inputBusqueda.addEventListener('keyup', function() {
            const valor = this.value;
            if (valor.length > 2) {
                fetch('../controlador/buscador.php?q=${valor}')
                    .then(res => res.text())
                    .then(data => {
                        divResultado.innerHTML = data;
                        divResultado.style.display = 'block';
                    });
            } else {
                divResultado.innerHTML = '';
            }
        });
        document.addEventListener('click', function(e) {
            if (!divResultado.contains(e.target)) {
                divResultado.innerHTML = '';
            }
        });
    </script>
</body>
</html>

