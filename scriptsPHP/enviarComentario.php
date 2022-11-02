<?php

//se arma el array POST
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST["comentario"];

$destino = "fnavarro860@alumnos.frh.utn.edu.ar";
$asunto = "Kindeln't";
$mensaje = "Nombre: " . $nombre . " Email: " . $email . " Mensaje: " . $comentario;

$header = "From: " . $nombre . "<" . $email . ">";

$enviado = mail($destino, $asunto, $mensaje, $header);

if ($enviado == true) {
	echo "Su correo ha sido enviado.";
} else {
	echo "Hubo un error al enviar el mail.";
}
