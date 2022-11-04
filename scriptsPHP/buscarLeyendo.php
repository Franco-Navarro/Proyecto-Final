<?php
include("manejoSesion.inc");
include("conexion.inc");

$id_usuario = $_SESSION['idUsuario'];
$titulo = $_POST['titulo'];
$array = [];
$id_result = mysqli_query($conexion, "SELECT id_libro FROM libros WHERE titulo = '$titulo'");
$id_fila = mysqli_fetch_assoc($id_result);
$id_libro = $id_fila['id_libro'];

$query = "SELECT * FROM leyendo WHERE leyendo.fk_usuario = " . $id_usuario . " AND leyendo.fk_libro = " .$id_libro;
$resultado = mysqli_query($conexion, $query);
$cant_filas = mysqli_num_rows($resultado);
$fila = mysqli_fetch_assoc($resultado);

if($cant_filas > 0){
    for ($i = 0; $i < $cant_filas; $i++) {
        $obj = new stdClass();
        $obj->fk_usuario = $fila["fk_usuario"];
        $obj->fk_libro = $fila["fk_libro"];
        $obj->pagina_actual = $fila["pagina_actual"];
        $obj->terminado = $fila["terminado"];

        array_push($array, $obj);
        $fila = mysqli_fetch_assoc($resultado);
    }
    mysqli_free_result($id_result);
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    echo json_encode($array);
}
else {
    $obj = new stdClass();
    $obj->pagina_actual = "undefined";
    array_push($array, $obj);
    echo json_encode($array);
}
