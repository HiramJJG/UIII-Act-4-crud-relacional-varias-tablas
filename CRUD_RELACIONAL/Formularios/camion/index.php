<?php
include_once("../../config/conexion.php")
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camion</title>
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
                            <a class="nav-link" href="<?php echo base_url; ?>">Inicio</a>
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

    <div class="container-lg mt-5">
        <a href="crear.php" type="button" class="btn btn-outline-primary mb-3">
            <i class="fa-solid fa-cart-plus fa-beat"></i>
            NUEVO
        </a>
        <h1 class="text-center bg-danger text-light ">Formulario Camion</h1>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Tipo de combustible</th>
                        <th scope="col">Fecha de fabricacion</th>
                        <th scope="col">Numero de asientos</th>
                        <th scope="col">Disponibilidad </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = $conexion->query("SELECT * FROM camion");

                    while ($resultado = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $resultado['id'] ?></th>
                            <th scope="row"><?php echo $resultado['marca'] ?></th>
                            <th scope="row"><?php echo $resultado['modelo'] ?></th>
                            <th scope="row"><?php echo $resultado['capacidad'] ?></th>
                            <th scope="row"><?php echo $resultado['tipo_combustible'] ?></th>
                            <th scope="row"><?php echo $resultado['feacha_fabricacion'] ?></th>
                            <th scope="row"><?php echo $resultado['num_asientos'] ?></th>
                            <th scope="row"><?php echo $resultado['disponibilidad'] ?></th>
                            <th scope="row">
                                <a href="<?php echo base_url; ?>Formularios/camion/actualizar.php?Id=<?php echo $resultado['id'] ?>" class="btn btn-outline-warning">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                </a>
                                <a href="<?php echo base_url; ?>CRUDC/eliminarDatos.php?Id=<?php echo $resultado['id'] ?>" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash fa-beat"></i>
                                </a>
                            </th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script>
        const base_url = "<?php echo base_url; ?>";
    </script>
    <script src="<?php echo base_url; ?>js/all.min.js"></script>

</body>

</html>
