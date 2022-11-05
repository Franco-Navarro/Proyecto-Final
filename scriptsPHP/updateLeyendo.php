<?php
include("manejoSesion.inc");
include("conexion.inc");

$id_usuario = $_SESSION['idUsuario'];
$titulo = $_POST['titulo'];
$pagina_actual = $_POST['pagina_actual'];
$id_result = mysqli_query($conexion, "SELECT id_libro, paginas_totales FROM libros WHERE titulo = '$titulo'");
$fila = mysqli_fetch_assoc($id_result);
$id_libro = $fila['id_libro'];

$query = "UPDATE leyendo SET pagina_actual = " . $pagina_actual . " WHERE fk_usuario = " . $id_usuario . " AND
fk_libro = " . $id_libro;

$resultado = mysqli_query($conexion, $query);
mysqli_free_result($id_result);
mysqli_close($conexion);
echo ($resultado);
mysqli_free_result($resultado);
