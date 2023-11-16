<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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
                            <a class="nav-link" href="<?php echo base_url; ?>"> Inicio</a>
                        </li>
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
                        <h5 class="card-title text-center">Actualizar formulario rutas</h5>
                        <form action="<?php echo base_url; ?>CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM rutas WHERE id =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id'] ?>">
                            <div class="mb-3">
                                <label for="Origen" class="form-label">Origen  </label>
                                <input type="text" class="form-control" id="Origen" name="Origen" placeholder="" value="<?php echo $row['Origen'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Destino" class="form-label">Destino</label>
                                <input type="text" class="form-control" id="Destino" name="Destino" placeholder="  " value="<?php echo $row['Destino'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Distancia" class="form-label">Distancia</label>
                                <input type="text" class="form-control" id="Distancia" name="Distancia" placeholder="  " value="<?php echo $row['Distancia'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Duracionviajes" class="form-label">Duracion del viaje  </label>
                                <input type="text" class="form-control" id="Duracionviajes" name="Duracionviajes" placeholder="  " value="<?php echo $row['Duracionviajes'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Atracc_cercanas" class="form-label">Atracciones cercanas</label>
                                <input type="text" class="form-control" id="Atracc_cercanas" name="Atracc_cercanas" placeholder="  " value="<?php echo $row['Atracc_cercanas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Servicios_y_comodidad" class="form-label">Servicios y comodidad  </label>
                                <input type="text" class="form-control" id="Servicios_y_comodidad" name="Servicios_y_comodidad" placeholder="  " value="<?php echo $row['Servicios_y_comodidad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Dificultaddecamino" class="form-label">Dificultad de camino  </label>
                                <input type="text" class="form-control" id="Dificultaddecamino" name="Dificultaddecamino" placeholder="  " value="<?php echo $row['Dificultaddecamino'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
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