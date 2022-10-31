<?php
$titulo = $_POST["titulo"];

$path = realpath("../assets/pdf");
chdir($path);
if (empty($_FILES['pdf']['name']) == false) {
    if (is_uploaded_file($_FILES['pdf']['tmp_name'])) {
        if (move_uploaded_file($_FILES['pdf']['tmp_name'], $titulo . ".pdf") == false)
            echo "No se ha podido el mover el archivo.";
        else
            echo "Archivo [" . $_FILES['pdf']['name'] . "] subido y movido al directorio actual.";
    } else {
        echo "Posible ataque al subir el archivo [" . $_FILES['pdf']['nombre_tmp'] . "]";
    }
} else {
    echo "No se seleccionó ningún archivo.";
}
$path = realpath("../portada");
chdir($path);
if (empty($_FILES['portada']['name']) == false) {
    if (is_uploaded_file($_FILES['portada']['tmp_name'])) {
        if (move_uploaded_file($_FILES['portada']['tmp_name'], $titulo . ".png") == false)
            echo "No se ha podido el mover el archivo.";
        else
            echo "Archivo [" . $_FILES['portada']['name'] . "] subido y movido al directorio actual.";
    } else {
        echo "Posible ataque al subir el archivo [" . $_FILES['portada']['nombre_tmp'] . "]";
    }
} else {
    echo "No se seleccionó ningún archivo.";
}
