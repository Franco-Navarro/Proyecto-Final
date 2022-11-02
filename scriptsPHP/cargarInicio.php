<?php
include("manejoSesion.inc");
include("conexion.inc");
$array = [];
$valor = isset($_POST['valor']) ? mysqli_real_escape_string($conexion, $_POST['valor']) : null;
$autorFiltro = isset($_POST['autorFiltro']) ? mysqli_real_escape_string($conexion, $_POST['autorFiltro']) : null;
$tituloFiltro = isset($_POST['tituloFiltro']) ? mysqli_real_escape_string($conexion, $_POST['tituloFiltro']) : null;
$generoFiltro = isset($_POST['generoFiltro']) ? mysqli_real_escape_string($conexion, $_POST['generoFiltro']) : null;
$sagaFiltro = isset($_POST['sagaFiltro']) ? mysqli_real_escape_string($conexion, $_POST['sagaFiltro']) : null;
$gratuitoFiltro = isset($_POST['gratuitoFiltro']) ? mysqli_real_escape_string($conexion, $_POST['gratuitoFiltro']) : null;
$columnas = [];

if($autorFiltro != null){
    array_push($columnas, $autorFiltro);
}
if($tituloFiltro != null){
    array_push($columnas, $tituloFiltro);
}
if($generoFiltro != null){
    array_push($columnas, $generoFiltro);
}
if($sagaFiltro != null){
    array_push($columnas, $sagaFiltro);
}

if($gratuitoFiltro == "true"){
    $filtroGratuito = ' AND libros.gratuito = 1';
}
else if($gratuitoFiltro == "false") {
    $filtroGratuito = '';
}

$filtro = '';

if ($valor != null) {
    $cantidad = count($columnas);
    $filtro = '(';
    for ($i = 0; $i < $cantidad; $i++) {
        $filtro = $filtro . $columnas[$i] . " LIKE '%" . $valor . "%' OR ";
    }
    $filtro = substr_replace($filtro, "", -3);
    $filtro = $filtro . ")";
    $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales, libros.gratuito FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero AND " . $filtro . $filtroGratuito);
} else {
    $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales, libros.gratuito FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero" . $filtroGratuito);
}

$cant_filas = mysqli_num_rows($resultado);
$fila = mysqli_fetch_assoc($resultado);
$obj = new stdClass();
for ($i = 0; $i < $cant_filas; $i++) {
    $obj = new stdClass();
    $obj->id = $fila["id_libro"];
    $obj->titulo = $fila["titulo"];
    $obj->autor = $fila["autor"];
    $obj->genero = $fila["genero"];
    $obj->saga = $fila["saga"];
    $obj->descripcion = $fila["descripcion"];
    $obj->paginas = $fila["paginas_totales"];
    $obj->gratuito = $fila["gratuito"];
    $obj->pdf = '../../assets/pdf/'. $fila["titulo"] . '.pdf';
    $obj->portada = '../../assets/portada/'. $fila["titulo"].'.png';

    array_push($array, $obj);
    $fila = mysqli_fetch_assoc($resultado);
}
mysqli_free_result($resultado);
mysqli_close($conexion);
echo json_encode($array);
