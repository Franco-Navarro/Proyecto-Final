<?php
    include("manejoSesion.inc");
    include("conexion.inc");

    $id_usuario = $_SESSION['idUsuario'];
    $id_libro = $_POST['id'];
    $query = "INSERT INTO favoritos (fk_usuario, fk_libro) VALUES (" . $id_usuario . ", " . $id_libro . ");";

    $resultado = mysqli_query($conexion, $query);
    echo ($resultado);
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>