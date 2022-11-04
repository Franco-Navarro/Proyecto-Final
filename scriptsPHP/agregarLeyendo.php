<?php
    include("manejoSesion.inc");
    include("conexion.inc");

    $id_usuario = $_SESSION['idUsuario'];
    $titulo = $_POST['titulo'];
    $pagina_actual = 1;
    $terminado = 0;
    $id_result = mysqli_query($conexion, "SELECT id_libro FROM libros WHERE titulo = '$titulo'");
    $fila = mysqli_fetch_assoc($id_result);
    $id_libro = $fila['id_libro'];
    

    $query = "INSERT INTO leyendo (fk_usuario, fk_libro, pagina_actual, terminado) 
        VALUES (" . $id_usuario . ", " . $id_libro . ", " . $pagina_actual . ", " . $terminado . ");";

    $resultado = mysqli_query($conexion, $query);
    mysqli_free_result($id_result);
    
    mysqli_close($conexion);
    echo ($resultado);
    mysqli_free_result($resultado);
?>