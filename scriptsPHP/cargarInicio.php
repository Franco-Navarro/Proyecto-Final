<?php
include("conexion.inc");
$array = [];
$valor = isset($_POST['valor']) ? mysqli_real_escape_string($conexion, $_POST['valor']) : null;

$columnas = ['libros.id_libro', 'libros.titulo', 'libros.saga', 'autores.nombre', 'generos.nombre'];

$filtro = '';

if ($valor != null) {
    $cantidad = count($columnas);
    $filtro = '(';
    for ($i = 0; $i < $cantidad; $i++) {
        $filtro = $filtro . $columnas[$i] . " LIKE '%" . $valor . "%' OR ";
    }
    $filtro = substr_replace($filtro, "", -3);
    $filtro = $filtro . ")";
    $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero AND " . $filtro);
} else {
    $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero");
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
    $obj->pdf = '../../assets/pdf/'. $fila["titulo"] . '.pdf';
    $obj->portada = '../../assets/portada/'. $fila["titulo"].'.png';

    array_push($array, $obj);
    $fila = mysqli_fetch_assoc($resultado);
}
mysqli_free_result($resultado);
mysqli_close($conexion);
echo json_encode($array);
