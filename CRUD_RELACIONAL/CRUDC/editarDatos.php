<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $capacidad = $_POST['capacidad'];
    $tipo_combustible = $_POST['tipo_combustible'];
    $feacha_fabricacion = $_POST['feacha_fabricacion'];
    $num_asientos = $_POST['num_asientos'];
    $disponibilidad = $_POST['disponibilidad'];
    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE camion SET marca = '$marca',modelo = '$modelo',capacidad = '$capacidad',tipo_combustible = '$tipo_combustible',feacha_fabricacion = '$feacha_fabricacion',num_asientos = '$num_asientos',disponibilidad = '$disponibilidad' WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/camion/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
