<?php
    include("conexion.inc");
    $array = [];
    $id_usuario = $_SESSION['idSesion'];
    $query = "SELECT libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero', libros.saga, libros.descripcion, libros.paginas_totales FROM libros, autores, generos, favoritos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero AND favoritos.fk_usuario = '$id_usuario' AND favoritos.fk_libro = libros.id_libro";

    $resultado = mysqli_query($conexion, $query);
    $cant_filas = mysqli_num_rows($resultado);
    $cant_filas = 15;
    $fila = mysqli_fetch_assoc($resultado);
    $obj = new stdClass();
    $obj->id_usuario = $id_usuario;
    array_push($array, $obj);
    for($i=0; $i < $cant_filas; $i++){
        $obj = new stdClass();

        $obj->titulo = $fila["libros.titulo"];
        $obj->autor = $fila["autor"];
        $obj->genero = $fila["genero"];
        $obj->saga = $fila["libros.saga"];
        $obj->descripcion = $fila["libros.descripcion"];
        $obj->paginas = $fila["libros.paginas_totales"];

        array_push($array, $obj);
        $fila = mysqli_fetch_assoc($resultado);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    $objDatos = new stdClass();
	$objDatos->libros = $array;
	$objDatos->cantidad = count($array);

    echo json_encode($objDatos);
?>