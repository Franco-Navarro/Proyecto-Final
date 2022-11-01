<?php
include("manejoSesion.inc");
    include("conexion.inc");

    $id_usuario = $_SESSION['idUsuario'];
    $id_libro = $_POST['id'];
    $query = "DELETE FROM favoritos WHERE fk_usuario = " . $id_usuario . " AND fk_libro = " . $id_libro . ";";

    $resultado = mysqli_query($conexion, $query);
    echo ($resultado);
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>