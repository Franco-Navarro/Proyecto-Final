<?php
    include("scriptsPHP/manejoSesion.inc");

    if($_SESSION['nivel'] == 1) {
        header('Location:app_modulo_usuario/menu/index.php');
    }
    else if($_SESSION['nivel'] == 3){
        header('Location:app_modulo_administrador/index.php');
    }
    exit();
?>