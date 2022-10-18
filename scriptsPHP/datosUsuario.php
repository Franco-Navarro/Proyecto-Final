<?php
    include("manejoSesion.inc");
    $datos = array("id"=>$_SESSION['idSesion'],"nombre"=>$_SESSION["login"],"rol"=>$_SESSION["rol"]);
    echo json_encode($datos);
?>
