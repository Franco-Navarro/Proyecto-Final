<?php
    include("conexion.inc");
    $tipo = $_POST["tipo"];
    // Desactivar toda notificación de error
    error_reporting(0);
    if($tipo === "libro") {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $saga = $_POST["saga"];
        $paginas = $_POST["paginas"];
        $descripcion = $_POST["descripcion"];

        $resultado = mysqli_query($conexion, "UPDATE libros SET titulo = '$titulo', fk_autor = '$autor', saga = '$saga', descripcion = '$descripcion', paginas_totales = '$paginas',   fk_genero = '$genero' WHERE id_libro = '$id';");

        mysqli_close($conexion);

        echo "UPDATE realizado con exito en libros";
    }
    else if($tipo === "usuario") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $rol = $_POST["rol"];
        $contrasenia = $_POST["contrasenia"];
        
        $resultado = mysqli_query($conexion, "UPDATE usuarios SET nombre = '$nombre', email = '$email', fk_rol = '$rol', contrasenia = '$contrasenia' WHERE id_usuario = '$id';");

        mysqli_close($conexion);

        echo "UPDATE realizado con exito en usuarios";
    }
?>