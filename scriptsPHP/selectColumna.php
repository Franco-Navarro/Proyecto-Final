<?php
include("manejoSesion.inc");
include("conexion.inc");
$array = [];
$tabla = mysqli_real_escape_string($conexion,$_POST["tabla"]);
$columna = mysqli_real_escape_string($conexion,$_POST["columna"]);

if(isset($tabla) && isset($columna)) {
    $resultado = mysqli_query($conexion, "SELECT $columna FROM $tabla");
    $cant_filas = mysqli_num_rows($resultado);  
}


$fila = mysqli_fetch_assoc($resultado);
for ($i = 0; $i < $cant_filas; $i++) {
    $obj = new stdClass();
    $obj->id = $i + 1;
    $obj->valor = $fila[$columna];

    array_push($array, $obj);
    $fila = mysqli_fetch_assoc($resultado);
}
mysqli_free_result($resultado);
mysqli_close($conexion);

echo json_encode($array);
