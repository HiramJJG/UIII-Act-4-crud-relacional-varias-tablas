<?php
require_once("../../config/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Fabricantes</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>Formularios/conductor/index.php">Conductor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/camion/index.php">Camion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/rutas/index.php">Rutas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registrar Conductor</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre_completo" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_naci" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fecha_naci" name="fecha_naci" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="lugar_destino" class="form-label">Lugar de destino</label>
                                <input type="text" class="form-control" id="lugar_destino" name="lugar_destino" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="num_camion" class="form-label">Numero de camion </label>
                                <input type="number" class="form-control" id="num_camion" name="num_camion" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="horario_viaje" class="form-label">Horario de viaje</label>
                                <input type="time" class="form-control" id="horario_viaje" name="horario_viaje" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="licensia" class="form-label"> Licencia</label>
                                <input type="text" class="form-control" id="licensia" name="licensia" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="curso_manejo" class="form-label">Curso de manejo   </label>
                                <input type="text" class="form-control" id="curso_manejo" name="curso_manejo" placeholder="">
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/conductor/index.php" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
</body>

</html>
