<?php
    include("dbParametros.inc");
    include("manejoSesion.inc");

    $conexion = mysqli_connect($host, $user,$password,$dbname) or exit("No se pudo establecer la conexion");
    
?>