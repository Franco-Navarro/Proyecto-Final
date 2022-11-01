<?php
include("manejoSesion.inc");
    include("conexion.inc");
    $array = [];
    $id_usuario = $_SESSION['idUsuario'];
    $query = "SELECT libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero', libros.saga, libros.descripcion, libros.paginas_totales, leyendo.pagina_actual, leyendo.terminado FROM libros, autores, generos, leyendo WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero AND leyendo.fk_usuario = '$id_usuario' AND leyendo.fk_libro = libros.id_libro";

    $resultado = mysqli_query($conexion, $query);
    $cant_filas = mysqli_num_rows($resultado);
    $fila = mysqli_fetch_assoc($resultado);
    for($i=0; $i < $cant_filas; $i++){
        $obj = new stdClass();

        $obj->titulo = $fila["titulo"];
        $obj->autor = $fila["autor"];
        $obj->genero = $fila["genero"];
        $obj->saga = $fila["saga"];
        $obj->descripcion = $fila["descripcion"];
        $obj->paginas = $fila["paginas_totales"];
        $obj->paginaActual = $fila["pagina_actual"];
        $obj->terminado = $fila["terminado"];
        $obj->pdf = '../../assets/pdf/'. $fila["titulo"] . '.pdf';
        $obj->portada = '../../assets/portada/'. $fila["titulo"].'.png';

        array_push($array, $obj);
        $fila = mysqli_fetch_assoc($resultado);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    $objDatos = new stdClass();
    $objDatos->id_usuario = $id_usuario;
	$objDatos->libros = $array;
	$objDatos->cantidad = count($array);

    echo json_encode($objDatos);
