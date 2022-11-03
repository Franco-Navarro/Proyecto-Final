<?php
include("manejoSesion.inc");
include("conexion.inc");
$tipo = $_POST["tipo"];
error_reporting(0);

if ($tipo === "libro") {
    $id = mysqli_real_escape_string($conexion,$_POST["id"]);
    $titulo = mysqli_real_escape_string($conexion,$_POST["titulo"]);
    $autor = mysqli_real_escape_string($conexion,$_POST["autor"]);
    $genero = mysqli_real_escape_string($conexion,$_POST["genero"]);
    $saga = mysqli_real_escape_string($conexion,$_POST["saga"]);
    $paginas = mysqli_real_escape_string($conexion,$_POST["paginas"]);
    $gratuito = mysqli_real_escape_string($conexion,$_POST["gratuito"]);
    $descripcion = mysqli_real_escape_string($conexion,$_POST["descripcion"]);
    $destacado = mysqli_real_escape_string($conexion,$_POST["destacado"]);

    if($gratuito == "Gratuito") {$gratuito = 1;}
    else if($gratuito == "Pago") {$gratuito = 0;}
    if($destacado == "Si") {$destacado = 1;}
    else if ($destacado == "No") {$destacado = 0;}

    if(isset($autor)){
        $resultado = mysqli_query($conexion, "SELECT id_autor FROM autores WHERE nombre = '$autor'");
        $fila = mysqli_fetch_assoc($resultado);
        $id_autor = $fila['id_autor'];
    }
    if(isset($genero)){
        $resultado2 = mysqli_query($conexion, "SELECT id_genero FROM generos WHERE nombre = '$genero'");
        $fila2 = mysqli_fetch_assoc($resultado2);
        $id_genero = $fila2['id_genero'];
    }
    if(isset($titulo) && isset($saga) && isset($descripcion) && isset($paginas) && isset($id)){
        mysqli_query($conexion, "UPDATE libros SET titulo = '$titulo', fk_autor = '$id_autor', saga = '$saga', descripcion = '$descripcion', paginas_totales = '$paginas',   fk_genero = '$id_genero', gratuito = '$gratuito', destacado = $destacado WHERE id_libro = '$id';");
    }

    mysqli_close($conexion);

    echo "UPDATE realizado con exito en libros";
} else if ($tipo === "usuario") {
    $id = mysqli_real_escape_string($conexion,$_POST["id"]);
    $nombre = mysqli_real_escape_string($conexion,$_POST["nombre"]);
    $email = mysqli_real_escape_string($conexion,$_POST["email"]);
    $rol = mysqli_real_escape_string($conexion,$_POST["rol"]);
    $contrasenia = mysqli_real_escape_string($conexion,$_POST["contrasenia"]);
    $contraseniaEnc = password_hash($contrasenia, PASSWORD_DEFAULT);

    if(isset($rol)){
        $resultado = mysqli_query($conexion, "SELECT id_rol FROM roles WHERE rol = '$rol'");
        $fila = mysqli_fetch_assoc($resultado);
        $id_rol = $fila['id_rol'];
    }

    if(isset($nombre) && isset($email) && isset($contrasenia) && isset($id)){
        mysqli_query($conexion, "UPDATE usuarios SET nombre = '$nombre', email = '$email', fk_rol = '$id_rol', contrasenia = '$contraseniaEnc' WHERE id_usuario = '$id';");
    }
    mysqli_close($conexion);

    echo "UPDATE realizado con exito en usuarios";
}
