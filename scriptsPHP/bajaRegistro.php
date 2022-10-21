<?php
    include("conexion.inc");
    $tipo = $_POST["tipo"];
    
    if($tipo === "libro") {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        if($id != "NULL"){
            $resultado = mysqli_query($conexion, "DELETE FROM libros WHERE libros.id_libro = '$id' and libros.titulo = '$titulo'");
        }
        mysqli_close($conexion);

        if($resultado == false) {
            echo "No se pudo realizar el delete";
        }
        else {
            echo "delete realizado con exito";
        }
    }
    else if($tipo === "usuario") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        if($id != "NULL"){
            $resultado = mysqli_query($conexion, "DELETE FROM usuarios WHERE usuarios.id_usuario = '$id' and usuarios.nombre = '$nombre'");
        }
        mysqli_close($conexion);

        if($resultado == false) {
            echo "No se pudo realizar el delete";
        }
        else {
            echo "delete realizado con exito";
        }
    }
?>