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
                            <a class="nav-link" href="<?php echo base_url; ?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>Formularios/conductor/index.php">Conductor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categoria/index.php">Categoria</a>
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
                        <h5 class="card-title text-center">Actualizar formulario Conductor</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM conductor WHERE id =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id'] ?>">
                            <div class="mb-3">
                            <label for="nombre_completo" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="" value="<?php echo $row['nombre_completo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_naci" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fecha_naci" name="fecha_naci" placeholder="  " value="<?php echo $row['fecha_naci'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="lugar_destino" class="form-label">Lugar de destino</label>
                                <input type="text" class="form-control" id="lugar_destino" name="lugar_destino" placeholder="  " value="<?php echo $row['lugar_destino'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="num_camion" class="form-label">Numero de camion </label>
                                <input type="num" class="form-control" id="num_camion" name="num_camion" placeholder="  " value="<?php echo $row['num_camion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="licensia" class="form-label">Hoarario de viaje</label>
                                <input type="time" class="form-control" id="horario_viaje" name="horario_viaje" placeholder="  " value="<?php echo $row['horario_viaje'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="licensia" class="form-label"> Licensia</label>
                                <input type="text" class="form-control" id="licensia" name="licensia" placeholder="  " value="<?php echo $row['licensia'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="curso_manejo" class="form-label">Curso manejo   </label>
                                <input type="text" class="form-control" id="curso_manejo" name="curso_manejo" placeholder="  " value="<?php echo $row['curso_manejo'] ?>">
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