<?php
    include("conexion.inc");
    $tipo = $_POST["tipo"];
    
    if($tipo === "libro") {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $saga = $_POST["saga"];
        $paginas = $_POST["paginas"];
        $descripcion = $_POST["descripcion"];
        if($id != "NULL"){
            $resultado = mysqli_query($conexion, "INSERT INTO libros VALUES ('$id', '$titulo', '$autor', '$saga', '$descripcion', '$paginas', '$genero')");
        }
        else {
            $resultado = mysqli_query($conexion, "INSERT INTO libros VALUES (NULL, '$titulo', '$autor', '$saga', '$descripcion', '$paginas', '$genero')");
        }
        mysqli_close($conexion);

        if($resultado == false) {
            echo "No se pudo realizar el insert";
        }
        else {
            echo "Insert realizado con exito";
        }
    }
    else if($tipo === "usuario") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $rol = $_POST["rol"];
        $contrasenia = $_POST["contrasenia"];
        if($id != "NULL"){
            $resultado = mysqli_query($conexion, "INSERT INTO usuarios VALUES ('$id', '$nombre', '$email', '$contrasenia', '$rol')");
        }
        else {
            $resultado = mysqli_query($conexion, "INSERT INTO usuarios VALUES (NULL, '$nombre', '$email', '$contrasenia', '$rol')");
        }
        mysqli_close($conexion);

        if($resultado == false) {
            echo "No se pudo realizar el insert";
        }
        else {
            echo "Insert realizado con exito";
        }
    }
?>