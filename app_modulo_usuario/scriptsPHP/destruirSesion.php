<?php
    include("manejoSesion.inc");
    Session_destroy();
    header('Location:../index.php');
    exit();
?>