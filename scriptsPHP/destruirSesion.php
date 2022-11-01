<?php
include("manejoSesion.inc");
Session_destroy();
header('Location:../login/InicioSesion.php');
exit();
