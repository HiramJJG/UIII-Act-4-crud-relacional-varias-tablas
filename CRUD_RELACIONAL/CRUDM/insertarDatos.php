<?php
include "../config/conexion.php";

$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$fecha_naci = mysqli_real_escape_string($conexion, $_POST['fecha_naci']);
$lugar_destino = mysqli_real_escape_string($conexion, $_POST['lugar_destino']);
$num_camion = mysqli_real_escape_string($conexion, $_POST['num_camion']);
$horario_viaje = mysqli_real_escape_string($conexion, $_POST['horario_viaje']);
$licensia = mysqli_real_escape_string($conexion, $_POST['licensia']);
$curso_manejo = mysqli_real_escape_string($conexion, $_POST['curso_manejo']);

$sql = "INSERT INTO conductor (nombre_completo, fecha_naci, lugar_destino, num_camion, horario_viaje, licensia, curso_manejo)
    VALUES ('$nombre_completo','$fecha_naci','$lugar_destino','$num_camion','$horario_viaje','$licensia','$curso_manejo')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/conductor/index.php");
} else {
    echo "Error en la inserción: " . mysqli_error($conexion);
}
?>
