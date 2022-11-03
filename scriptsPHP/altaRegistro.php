<?php
include("manejoSesion.inc");
include("conexion.inc");
$tipo = mysqli_real_escape_string($conexion, $_POST["tipo"]);
// Desactivar toda notificación de error
//error_reporting(0);
if ($tipo === "libro") {
    $titulo = mysqli_real_escape_string($conexion, $_POST["titulo"]);
    $autor = mysqli_real_escape_string($conexion, $_POST["autor"]);
    $genero = mysqli_real_escape_string($conexion, $_POST["genero"]);
    $saga = mysqli_real_escape_string($conexion, $_POST["saga"]);
    $paginas = mysqli_real_escape_string($conexion, $_POST["paginas"]);
    $descripcion = mysqli_real_escape_string($conexion, $_POST["descripcion"]);
    $gratuito = mysqli_real_escape_string($conexion, $_POST["gratuito"]);
    $destacado = mysqli_real_escape_string($conexion, $_POST["destacado"]);

    if($gratuito == "Gratuito") {$gratuito = 1;}
    else if($gratuito == "Pago") {$gratuito = 0;}
    if($destacado == "Si") {$destacado = 1;}
    else if ($destacado == "No") {$destacado = 0;}

    if (isset($autor)) {
        $resultado = mysqli_query($conexion, "SELECT id_autor FROM autores WHERE nombre = '$autor'");
        $fila = mysqli_fetch_assoc($resultado);
        $id_autor = $fila['id_autor'];
    }
    if (isset($genero)) {
        $resultado2 = mysqli_query($conexion, "SELECT id_genero FROM generos WHERE nombre = '$genero'");
        $fila2 = mysqli_fetch_assoc($resultado2);
        $id_genero = $fila2['id_genero'];
    }
    if (isset($titulo) && isset($saga) && isset($descripcion) && isset($paginas)) {
        mysqli_query($conexion, "INSERT INTO libros VALUES (NULL, '$titulo', '$id_autor', '$saga', '$descripcion', '$paginas', '$id_genero', '$gratuito','$destacado')");
    }
    mysqli_close($conexion);
    echo "INSERT realizado con exito en libros";
} else if ($tipo === "usuario") {
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $email = mysqli_real_escape_string($conexion, $_POST["email"]);
    $rol = mysqli_real_escape_string($conexion, $_POST["rol"]);
    $contrasenia = mysqli_real_escape_string($conexion, $_POST["contrasenia"]);
    $contraseniaEnc = password_hash($contrasenia, PASSWORD_DEFAULT);

    if (isset($rol)) {
        $resultado = mysqli_query($conexion, "SELECT id_rol FROM roles WHERE rol = '$rol'");
        $fila = mysqli_fetch_assoc($resultado);
        $id_rol = $fila['id_rol'];
    }
    if (isset($nombre) && isset($email) && isset($contrasenia)) {
        mysqli_query($conexion, "INSERT INTO usuarios VALUES (NULL, '$nombre', '$email', '$contraseniaEnc', '$id_rol', 'false')");
    }
    mysqli_close($conexion);
    echo "INSERT realizado con exito en usuarios";
} else if ($tipo === "rol") {
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);

    if (isset($nombre)) {
        mysqli_query($conexion, "INSERT INTO roles VALUES (NULL, '$nombre')");
    }
    mysqli_close($conexion);
    echo "INSERT realizado con exito en roles";
} else if ($tipo === "autor") {
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);

    if (isset($nombre)) {
        mysqli_query($conexion, "INSERT INTO autores VALUES (NULL, '$nombre')");
    }
    mysqli_close($conexion);
    echo "INSERT realizado con exito en autores";
} else if ($tipo === "genero") {
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);

    if (isset($nombre)) {
        mysqli_query($conexion, "INSERT INTO generos VALUES (NULL, '$nombre')");
    }
    mysqli_close($conexion);
    echo "INSERT realizado con exito en generos";
}
