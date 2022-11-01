<?php
include("manejoSesion.inc");
    include("conexion.inc");

    $id_usuario = $_POST['idUsuario'];
    $id_libro = $_POST['idLibro'];
    $pagina_actual = $_POST['paginaActual'];
    $terminado = $_POST['terminado'];
    $query = "INSERT INTO leyendo (fk_usuario, fk_libro, pagina_actual, terminado) 
        VALUES (" . $id_usuario . ", " . $id_libro . ", " . $pagina_actual . ", " . $terminado . ");";

    $resultado = mysqli_query($conexion, $query);
    echo ($resultado);
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>