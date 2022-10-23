<?php
    include("conexion.inc");
    $tipo = $_POST["tipo"];
    // Desactivar toda notificación de error
    error_reporting(0);
    if($tipo === "libro") {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $saga = $_POST["saga"];
        $paginas = $_POST["paginas"];
        $descripcion = $_POST["descripcion"];

        $resultado = mysqli_query($conexion, "INSERT INTO libros VALUES (NULL, '$titulo', '$autor', '$saga', '$descripcion', '$paginas', '$genero')");

        mysqli_close($conexion);

        echo "INSERT realizado con exito en libros";
    }
    else if($tipo === "usuario") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $rol = $_POST["rol"];
        $contrasenia = $_POST["contrasenia"];

        mysqli_query($conexion, "INSERT INTO usuarios VALUES (NULL, '$nombre', '$email', '$contrasenia', '$rol')");
        mysqli_close($conexion);
        echo "INSERT realizado con exito en usuarios";
    }
?>