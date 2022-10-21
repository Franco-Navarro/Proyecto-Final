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
            $resultado = mysqli_query($conexion, "UPDATE libros SET titulo = '$titulo', fk_autor = '$autor', saga = '$saga', descripcion = '$descripcion', paginas_totales = '$paginas',   fk_genero = '$genero' WHERE id_libro = '$id';");
        }

        mysqli_close($conexion);

        if($resultado == false) {
            echo "No se pudo realizar el update";
        }
        else {
            echo "update realizado con exito";
        }
    }
    else if($tipo === "usuario") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $rol = $_POST["rol"];
        $contrasenia = $_POST["contrasenia"];
        if($id != "NULL"){
            $resultado = mysqli_query($conexion, "UPDATE usuarios SET nombre = '$nombre', email = '$email', fk_rol = '$rol', contrasenia = '$contrasenia' WHERE id_usuario = '$id';");
        }

        mysqli_close($conexion);

        if($resultado == false) {
            echo "No se pudo realizar el update";
        }
        else {
            echo "update realizado con exito";
        }
    }
?>