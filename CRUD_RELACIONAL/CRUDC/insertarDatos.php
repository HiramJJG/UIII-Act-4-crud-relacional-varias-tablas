<?php
include "../config/conexion.php";

$marca = mysqli_real_escape_string($conexion, $_POST['marca']);
$modelo = mysqli_real_escape_string($conexion, $_POST['modelo']);
$capacidad = mysqli_real_escape_string($conexion, $_POST['capacidad']);
$tipo_combustible = mysqli_real_escape_string($conexion, $_POST['tipo_combustible']);
$feacha_fabricacion = mysqli_real_escape_string($conexion, $_POST['feacha_fabricacion']);
$num_asientos = mysqli_real_escape_string($conexion, $_POST['num_asientos']);
$disponibilidad = mysqli_real_escape_string($conexion, $_POST['disponibilidad']);

$sql = "INSERT INTO camion (marca, modelo, capacidad, tipo_combustible, feacha_fabricacion, num_asientos, disponibilidad)
    VALUES ('$marca','$modelo','$capacidad','$tipo_combustible','$feacha_fabricacion','$num_asientos','$disponibilidad')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/camion/index.php");
} else {
    echo "Error en la inserción: " . mysqli_error($conexion);
}
?>
