<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $Origen = $_POST['Origen'];
    $Destino = $_POST['Destino'];
    $Distancia = $_POST['Distancia'];
    $Duracionviajes = $_POST['Duracionviajes'];
    $Atracc_cercanas = $_POST['Atracc_cercanas'];
    $Servicios_y_comodidad = $_POST['Servicios_y_comodidad'];
    $Dificultaddecamino = $_POST['Dificultaddecamino'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE rutas SET Origen = '$Origen',Destino = '$Destino',Distancia = '$Distancia',Duracionviajes = '$Duracionviajes', Atracc_cercanas = '$Atracc_cercanas', Servicios_y_comodidad = '$Servicios_y_comodidad', Dificultaddecamino = '$Dificultaddecamino' WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/rutas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
