<?php
    include("conexion.inc");
    $tipo = $_POST["tipo"];
    // Desactivar toda notificación de error
    error_reporting(0);
    if($tipo === "libro") {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $resultado = mysqli_query($conexion, "DELETE FROM libros WHERE libros.id_libro = '$id' and libros.titulo = '$titulo'");
        
        mysqli_close($conexion);

        echo "DELETE realizado con exito en libros";
    }
    else if($tipo === "usuario") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $resultado = mysqli_query($conexion, "DELETE FROM usuarios WHERE usuarios.id_usuario = '$id' and usuarios.nombre = '$nombre'");
        
        mysqli_close($conexion);

        echo "DELETE realizado con exito en usuarios";

    }
?>