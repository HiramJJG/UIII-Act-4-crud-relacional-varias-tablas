<?php
require_once("../../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $capacidad = $_POST['capacidad'];
    $tipo_combustible = $_POST['tipo_combustible'];
    $feacha_fabricacion = $_POST['feacha_fabricacion'];
    $num_asientos = $_POST['num_asientos'];
    $disponibilidad = $_POST['disponibilidad'];

    $query = "INSERT INTO camion (marca, modelo, capacidad, tipo_combustible, feacha_fabricacion, num_asientos, disponibilidad) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ssssssi", $marca, $modelo, $capacidad, $tipo_combustible, $feacha_fabricacion, $num_asientos, $disponibilidad);
    $stmt->execute();
    $stmt->close();

    // Redireccionar a la página de visualización de camiones después de guardar los datos
    header("Location: " . base_url . "Formularios/camion/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">registrar camion</h5>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca </label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="capacidad" class="form-label">Capacidad</label>
                                <input type="text" class="form-control" id="capacidad" name="capacidad" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="tipo_combustible" class="form-label">Tipo de combustible</label>
                                <input type="text" class="form-control" id="tipo_combustible" name="tipo_combustible" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="feacha_fabricacion" class="form-label">Fecha de fabricacion </label>
                                <input type="date" class="form-control" id="feacha_fabricacion" name="feacha_fabricacion" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="num_asientos" class="form-label">Numero de asientos</label>
                                <input type="number" class="form-control" id="num_asientos" name="num_asientos" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="disponibilidad" class="form-label">Disponibilidad</label>
                                <input type="number" class="form-control" id="disponibilidad" name="disponibilidad" placeholder="">

                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/camion/index.php" class="btn btn-outline-secondary">Cancelar</a>
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
