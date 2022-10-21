<?php
    include("conexion.inc");
    $array = [];
    $tipo = $_POST["tipo"];

    if($tipo == "libro") {
        $resultado = mysqli_query($conexion, "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero',libros.saga, libros.descripcion, libros.paginas_totales FROM libros, autores, generos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero");
        $cant_filas = mysqli_num_rows($resultado);
        $fila = mysqli_fetch_assoc($resultado);
        $obj = new stdClass();
        $obj->tipo = "libro";
        array_push($array, $obj);
        for($i=0; $i < $cant_filas; $i++){
            $obj = new stdClass();

            $obj->id = $fila["id_libro"];
            $obj->titulo = $fila["titulo"];
            $obj->autor = $fila["autor"];
            $obj->genero = $fila["genero"];
            $obj->saga = $fila["saga"];
            $obj->descripcion = $fila["descripcion"];
            $obj->paginas = $fila["paginas_totales"];
    
            array_push($array, $obj);
            $fila = mysqli_fetch_assoc($resultado);
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
        echo json_encode($array);
    }
    else if($tipo == "usuario") {
        $resultado = mysqli_query($conexion, "SELECT usuarios.id_usuario, usuarios.nombre, usuarios.email, roles.rol, usuarios.contrasenia FROM usuarios, roles WHERE usuarios.fk_rol = roles.id_rol;");
        $cant_filas = mysqli_num_rows($resultado);
        $fila = mysqli_fetch_assoc($resultado);
        $obj = new stdClass();
        $obj->tipo = "usuario";
        array_push($array, $obj);
        for($i=0; $i < $cant_filas; $i++){
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



?>