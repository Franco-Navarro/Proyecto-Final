<?php
include("manejoSesion.inc");
    include("conexion.inc");

    $id_usuario = $_SESSION['idSesion'];
    $id_libro = $_POST['idLibro'];
    $query = "DELETE FROM leyendo WHERE id_usuario = " . $id_usuario . " AND id_libro = " . $id_libro . ";";

    $resultado = mysqli_query($conexion, $query);
    echo ($resultado);
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>