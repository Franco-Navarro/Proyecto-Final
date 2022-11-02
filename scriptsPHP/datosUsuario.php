<?php
include("manejoSesion.inc");
$datos = array("id" => $_SESSION['idSesion'], "nombre" => $_SESSION["login"], "rol" => $_SESSION["rol"], "idUsuario" => $_SESSION["idUsuario"], "email" => $_SESSION["email"], "tema_oscuro" => $_SESSION["tema_oscuro"]);

echo json_encode($datos);
