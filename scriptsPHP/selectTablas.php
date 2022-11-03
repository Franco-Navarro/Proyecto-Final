<?php
include("manejoSesion.inc");
include("conexion.inc");
$array = [];
$tipo = $_POST["tipo"];
$valor = isset($_POST['valor']) ? mysqli_real_escape_string($conexion, $_POST['valor']) : null;


if ($tipo == "libro") {
    $columnas = ['libros.id_libro', 'libros.titulo','libros.saga','autores.nombre','generos.nombre'];

    $filtro = '';

    if ($valor != null) {
        $cantidad = count($columnas);
        $filtro = '(';
        for ($i = 0; $i < $cantidad; $i++) {
            $filtro = $filtro . $columnas[$i] . " LIKE '%" . $valor . "%' OR ";
        }
        $filtro = substr_replace($filtro, "", -3);
        $filtro = $filtro . ")";
        $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales, libros.gratuito, libros.destacado FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero AND " . $filtro);
    }
    else {
        $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales, libros.gratuito, libros.destacado FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero");
    }

    $cant_filas = mysqli_num_rows($resultado);
    $fila = mysqli_fetch_assoc($resultado);
    $obj = new stdClass();
    $obj->tipo = "libro";
    array_push($array, $obj);
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
        $obj->destacado = $fila["destacado"];

        array_push($array, $obj);
        $fila = mysqli_fetch_assoc($resultado);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    echo json_encode($array);

} else if ($tipo == "usuario") {
    $columnas = ['usuarios.id_usuario', 'usuarios.nombre','usuarios.email','roles.rol'];

    $filtro = '';

    if ($valor != null) {
        $cantidad = count($columnas);
        $filtro = '(';
        for ($i = 0; $i < $cantidad; $i++) {
            $filtro = $filtro . $columnas[$i] . " LIKE '%" . $valor . "%' OR ";
        }
        $filtro = substr_replace($filtro, "", -3);
        $filtro = $filtro . ")";
        $resultado = mysqli_query($conexion, "SELECT usuarios.id_usuario, usuarios.nombre, usuarios.email, roles.rol, usuarios.contrasenia FROM usuarios, roles WHERE usuarios.fk_rol = roles.id_rol AND " . $filtro);
    }
    else {
        $resultado = mysqli_query($conexion, "SELECT usuarios.id_usuario, usuarios.nombre, usuarios.email, roles.rol, usuarios.contrasenia FROM usuarios, roles WHERE usuarios.fk_rol = roles.id_rol;");
    }

    $cant_filas = mysqli_num_rows($resultado);
    $fila = mysqli_fetch_assoc($resultado);
    $obj = new stdClass();
    $obj->tipo = "usuario";
    array_push($array, $obj);
    for ($i = 0; $i < $cant_filas; $i++) {
        $obj = new stdClass();

        $obj->id = $fila["id_usuario"];
        $obj->nombre = $fila["nombre"];
        $obj->email = $fila["email"];
        $obj->rol = $fila["rol"];
        $obj->contrasenia = $fila["contrasenia"];

        array_push($array, $obj);
        $fila = mysqli_fetch_assoc($resultado);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    echo json_encode($array);
}
