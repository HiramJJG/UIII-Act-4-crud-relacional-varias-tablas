<?php
include_once "../config/conexion.php";

$Origen = mysqli_real_escape_string($conexion, $_POST['Origen']);
$Destino = mysqli_real_escape_string($conexion, $_POST['Destino']);
$Distancia = mysqli_real_escape_string($conexion, $_POST['Distancia']);
$Duracionviajes	 = mysqli_real_escape_string($conexion, $_POST['Duracionviajes	']);
$Atracc_cercanas = mysqli_real_escape_string($conexion, $_POST['Atracc_cercanas']);
$Servicios_y_comodidad = mysqli_real_escape_string($conexion, $_POST['Servicios_y_comodidad']);
$Dificultaddecamino = mysqli_real_escape_string($conexion, $_POST['Dificultaddecamino']);

$sql = "INSERT INTO rutas(Origen, Destino, Distancia, Duracionviajes, Atracc_cercanas, Servicios_y_comodidad, Dificultaddecamino)
    VALUES ('$Origen', '$Destino', '$Distancia', '$Duracionviajes', '$Atracc_cercanas', '$Servicios_y_comodidad', '$Dificultaddecamino')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/rutas/index.php");
} else {
    echo "Datos no insertados";
}
?>
