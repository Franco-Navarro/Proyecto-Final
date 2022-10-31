<?php
include("scriptsPHP/manejoSesion.inc");

if ($_SESSION['rol'] == 1) {
    header('Location:app_modulo_administrador/index.php');
} else if ($_SESSION['rol'] == 2) {
    header('Location:app_modulo_usuario/menu/index.php');
} else if ($_SESSION['rol'] == 3) {
    header('Location:app_modulo_usuario/menu/index.php');
}
exit();
