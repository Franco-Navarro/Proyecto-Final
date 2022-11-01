<?php
include("manejoSesion.inc");
    include("conexion.inc");
    $id_usuario = $_SESSION['idUsuario'];
    $id_libro = $_POST['id'];
    $encontrado = false;
    $query = "SELECT * FROM favoritos WHERE favoritos.fk_usuario = '$id_usuario' AND favoritos.fk_libro = '$id_libro'";

    $resultado = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($resultado);
    
    if($fila != false) {
        $encontrado = true;
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

    echo $encontrado;
?>