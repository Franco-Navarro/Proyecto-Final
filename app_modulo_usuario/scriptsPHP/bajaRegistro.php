<?php
include("manejoSesion.inc");
include("conexion.inc");
$tipo = $_POST["tipo"];

if ($tipo === "libro") {
    $id = mysqli_real_escape_string($conexion,$_POST["id"]);
    $titulo = mysqli_real_escape_string($conexion,$_POST["titulo"]);

    if(isset($id) && isset($titulo)){
        mysqli_query($conexion, "DELETE FROM libros WHERE libros.id_libro = '$id' and libros.titulo = '$titulo'");
    }

    mysqli_close($conexion);
    echo "DELETE realizado con exito en libros";
} 
else if ($tipo === "usuario") {
    $id = mysqli_real_escape_string($conexion,$_POST["id"]);
    $nombre = mysqli_real_escape_string($conexion,$_POST["nombre"]);

    if(isset($nombre) && isset($id)){
        $resultado = mysqli_query($conexion, "DELETE FROM usuarios WHERE usuarios.id_usuario = '$id' and usuarios.nombre = '$nombre'");
    }

    mysqli_close($conexion);
    echo "DELETE realizado con exito en usuarios";
}
