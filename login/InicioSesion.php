<?php

session_start();

require '../scriptsPHP/conexion.inc';

$message = '';

if (isset($_POST["boton-ingresar"])) {

    if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];

        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$nombre'");
        $results = mysqli_fetch_assoc($query);

        if (!$results) {
            $message = "La contraseña y el usuario son incorrectos.";
        } else {
            if (password_verify($password, $results['contrasenia'])) {
                $fk_usuario = $results['id_usuario'];
                $rol = $results['fk_rol'];

                if ($rol == 2) {
                    $nivel = "gratuito";
                    $_SESSION['nivel'] = $nivel;
                }

                if ($rol == 3) {
                    $nivel = "premium";
                    $_SESSION['nivel'] = $nivel;

                    $query3 = mysqli_query($conexion, "SELECT MAX(fecha_pago) FROM facturas WHERE fk_usuario = '$fk_usuario' AND primera_cuota = 1");
                    $result3 = mysqli_fetch_assoc($query3);
                    $fecha_maxima = $result3['fecha_pago'];

                    $fecha_actual = date("Y-m-d");
                    $fecha1 = new dateTime($fecha_actual);
                    $fecha2 = new dateTime($fecha_maxima);
                    //$fecha2 = new dateTime ("2022-11-05");

                    $diff = $fecha1->diff($fecha2);

                    $diferencia = $diff->days;

                    if ($diff->days > 30) {

                        $dias_disponibles = 0;

                        $actualizo_usuario = mysqli_query($conexion, "UPDATE usuarios SET fk_rol = 2, tema_oscuro = 0 WHERE id_usuario = '$fk_usuario'");

                        $actualizo_dias = mysqli_query($conexion, "UPDATE dias SET dias_disponibles='$dias_disponibles' WHERE fk_usuario = '$fk_usuario'");
                        //header('Location:..//app_modulo_usuario/menu/index.php');
                    }
                }

                $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$nombre'");
                $results = mysqli_fetch_assoc($query);
                $_SESSION['rol'] = $results['fk_rol'];
                $_SESSION['idUsuario'] = $results['id_usuario'];
                $_SESSION['email'] = $results['email'];
                $_SESSION['tema_oscuro'] = $results['tema_oscuro'];
                $_SESSION['login'] = $results['nombre'];
                $_SESSION['idSesion'] = session_create_id();
                $_SESSION['diferencia_fechas'] = $diferencia;
                header('Location: ../');
            } else {
                $message = 'Ha ingresado mal la contraseña.';
            }
        }
    } else {
        $message = 'Todos los campos son requeridos.';
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../styles/base.css">
    <link rel="stylesheet" type="text/css" href="../styles/componentes.css">
    <link rel="stylesheet" type="text/css" href="../styles/modoOscuro.css">
    <title>Kindlent</title>
    <link rel="icon" href="../assets/icono.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body id="body" class="">
    <section class="descripcion-seccion" id="descripcion-seccion">
        <div class="descripcion-contenido">
            <h1>
                Bienvenido a Kindlen't
            </h1>
            <p>
                Kindlen’t es una aplicación que busca llevar le lectura a un amplio publico atravez de un amplio catalogo de libros y un rapido y facil acceso a la aplicacion.
            </p>
            <p>
                Kindlen't ofrece la creacion de una cuenta gratuita con un catalogo limitado de libros y funciones o una cuenta premium con un acceso completo 
            </p>
            <p>
                Gracias por tu atencion
            </p>
            <p> 
                <small>
                    Para nada esto es una copia de Kindle Amazon y para nada se infringen todas las normas de copyright
                </small>
            </p>
            <button id="cerrar-descripcion">
                Cerrar
            </button>
        </div>
    </section>
    <header class="header" id="home">
        <div class="header-logo">
            <a href="login.html"><img src="../assets/logo.svg" alt=""></a>
        </div>
    </header>

    <!--SECCION DE LOGIN-->

    <section class="login-seccion" id="seccion-login">
        <article class="login-contenido">
            <div class="login-contenido-izq">
                <h1 class="login-izq-titulo">Bienvenido a <br> Kindlen't</h1>
                <?php if (!empty($message)) : ?>
                    <p> <?= $message ?></p>
                <?php endif; ?>
                <?php if (!empty($message2)) : ?>
                    <p> <?= $message2 ?></p>
                <?php endif; ?>
                <div class="login-izq-img">
                    <img src="../assets/login-img.svg" alt="">
                </div>
            </div>
            <div class="login-contenido-der">



                <h3 class="login-der-titulo">Iniciar Sesion</h3>
                <form id="form-login" action="InicioSesion.php" method="post" class="login-der-form">
                    <div class="login-form-input">
                        <label for="nombre">Usuario</label>
                        <input type="text" name="nombre" id="nombre" required minlength="5" maxlength="40" pattern="[A-Za-z0-9]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 40">
                    </div>
                    <div class="login-form-input">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" required minlength="8" maxlength="32" title="Tamaño mínimo: 8. Tamaño máximo: 32">
                    </div>
                    <div class="login-form-buttons">
                        <div class="login-form-button">
                            <input type="submit" value="Ingresar" name="boton-ingresar" id="boton-ingresar">
                        </div>

                    </div>

                </form>
                <div class="login-der-enlaces">
                    <a href="Registro.php" id="boton-registro">Registrarse</a>
                    <a href="recuperarContraseña.php"><small>Recuperar Contraseña</small> </a>
                </div>
            </div>
        </article>
    </section>

    <footer class="footer">
        <div class="git-container">
            <div class="git-linea"></div>
            <a href="https://github.com/Franco-Navarro/Proyecto-Final" target="_blank"><svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13 0C5.81963 0 0 5.72826 0 12.7959C0 18.4485 3.72378 23.2453 8.89042 24.9388C9.54081 25.0543 9.77542 24.6604 9.77542 24.3217C9.77542 24.0177 9.76499 23.212 9.76108 22.1459C6.14418 22.9182 5.38039 20.4293 5.38039 20.4293C4.79126 18.9514 3.93754 18.5575 3.93754 18.5575C2.75797 17.7634 4.02747 17.7814 4.02747 17.7814C5.33347 17.8712 6.01775 19.1002 6.01775 19.1002C7.17776 21.0554 9.06246 20.4909 9.80018 20.1637C9.91879 19.3363 10.2577 18.7718 10.6278 18.4523C7.74213 18.1303 4.70784 17.0321 4.70784 12.1275C4.70784 10.733 5.21486 9.58859 6.04251 8.69567C5.91087 8.37109 5.4612 7.06892 6.17155 5.30875C6.17155 5.30875 7.26248 4.96364 9.74544 6.61861C10.8059 6.33467 11.8997 6.18973 12.9987 6.18755C14.0977 6.18931 15.1916 6.33425 16.252 6.61861C18.7362 4.96236 19.8258 5.30875 19.8258 5.30875C20.5362 7.06892 20.0904 8.37109 19.9549 8.69567C20.7891 9.58859 21.2896 10.7317 21.2896 12.1275C21.2896 17.045 18.2527 18.1252 15.3565 18.4421C15.8192 18.8372 16.2363 19.6172 16.2363 20.8103C16.2363 22.5218 16.2207 23.9022 16.2207 24.3217C16.2207 24.6643 16.4527 25.062 17.1161 24.9362C22.2801 23.2402 26 18.4472 26 12.7959C26 5.72826 20.1804 0 13 0Z" fill="#F6F6F6" />
                </svg>
            </a>
            <div class="git-linea"></div>
        </div>
        <div class="copy-container">
            <p><small>Copyright 2022 Kindlen't Inc</small></p>
        </div>
    </footer>
</body>
<script>
    // EVITAR REENVIO DE DATOS.
    if (window.history.replaceState) { // verificamos disponibilidad
        window.history.replaceState(null, null, window.location.href);
    }
    document.getElementById("cerrar-descripcion").addEventListener("click", (e)=> {
    let seccion = document.getElementById("descripcion-seccion"),
    body = document.getElementById("body");
    body.removeChild(seccion)
})
</script>

</html>