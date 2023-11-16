<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombre_completo = $_POST['nombre_completo'];
    $fecha_naci	 = $_POST['fecha_naci'];
    $lugar_destino = $_POST['lugar_destino'];
    $num_camion = $_POST['num_camion'];
    $horario_viaje = $_POST['horario_viaje'];
    $licensia = $_POST['licensia'];
    $curso_manejo = $_POST['curso_manejo'];
    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE conductor SET nombre_completo = '$nombre_completo',fecha_naci = '$fecha_naci',lugar_destino = '$lugar_destino',num_camion = '$num_camion',horario_viaje = '$horario_viaje',licensia = '$licensia',curso_manejo = '$curso_manejo' WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/conductor/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
