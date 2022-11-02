<?php
include("manejoSesion.inc");
include("conexion.inc");
$array = [];
$id_usuario = $_SESSION['idUsuario'];
$tema = $_SESSION['tema_oscuro'];

if ($tema == 1) {
    $resultado = mysqli_query($conexion, "UPDATE usuarios SET tema_oscuro = 0 WHERE id_usuario = " . $id_usuario);
    $_SESSION['tema_oscuro'] = 0;
} else if ($tema == 0) {
    $resultado = mysqli_query($conexion, "UPDATE usuarios SET tema_oscuro = 1 WHERE id_usuario = " . $id_usuario);
    $_SESSION['tema_oscuro'] = 1;
} else {
    mysqli_close($conexion);
    die("No se pudo actualizar el tema");
}

mysqli_close($conexion);
echo $_SESSION['tema_oscuro'];
