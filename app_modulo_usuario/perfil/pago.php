<?php

    include("../../scriptsPHP/manejoSesion.inc");
    require '../../scriptsPHP/conexion.inc';

    $email = $_SESSION['email'];

    $mensaje = '';

    if(isset($_POST["pagar-boton"])){
        $fechaPago = date("Y-m-d");
        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
        if(!$query){
            $mensaje = "No se encontró un usuario con ese mail asociado.";
        }
        else{
            $results = mysqli_fetch_assoc($query);
            $fk_usuario = $results ['id_usuario'];

            $query2 = mysqli_query($conexion, "SELECT dias_disponibles FROM dias WHERE fk_usuario = '$fk_usuario'");
            $result2 = mysqli_fetch_assoc($query2);
            $dias_disponibles = $result2['dias_disponibles'] + 30;
    
            $pago = mysqli_query($conexion, "INSERT INTO facturas (fecha_pago, importe, fk_usuario, primera_cuota) VALUES ('$fechaPago', 10, '$fk_usuario', 0)");

            $actualizo_dias = mysqli_query($conexion, "UPDATE dias SET dias_disponibles='$dias_disponibles' WHERE fk_usuario = '$fk_usuario'");
    
            if($pago){
                $mensaje = "Pago realizado con éxito.";
            }
            else{
                $mensaje = "Pago fallido.";
            }
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
    <link rel="icon" href="../assets/icono.svg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
</head>

<body id="body" class="">
    <header class="header" id="home">
        <div class="header-logo">
            <a href="InicioSesion.php"><img src="../assets/logo.svg" alt=""></a>
        </div>
    </header> 

<!--SECCION DE REGISTRO-->
    <section class="login-seccion" id="seccion-pago">
        <article class="registro-contenido">
            <div class="registro-contenido-izq">
                <h3 class="registro-izq-titulo">Cuota de la suscripción: $500</h3>
                <form id="form-pago" action="pago.php" class="contacto-form" method="POST">
                    <div class="registro-form-input">
                        <label for="númeroTarjeta"></label>
                        <br>
                        <br>                        
                        <label for="númeroTarjeta">Tarjeta de Crédito</label>
                        <input type="int" name="númeroTarjeta" id="númeroTarjeta" required minlength="16" maxlength="16" pattern="[0-9]+">
                    </div>
                    <div class="registro-form-input">
                        <label for="seguridadTarjeta">Número de seguridad de tarjeta de Crédito</label>
                        <input type="int" name="seguridadTarjeta" id="seguridadTarjeta" required minlength="3" maxlength="3" pattern="[0-9]+">
                    </div>
                    <div class="login-form-buttons">
                        <div class="login-form-button">
                            <input type="submit" value="Pagar" name="pagar-boton" id="pagar-boton"></button>
                        </div>
                    </div>
                    <div class="registro-izq-enlaces" id="volver-login">
                    <a href="index.php" >Volver</a>
                </div>
                </form>
            </div>
            <div class="registro-contenido-der">
                <h1 class="registro-der-titulo">Comienza en <br> Kindlen't</h1>
                <?php if(!empty($mensaje)): ?>
                    <p> <?= $mensaje ?></p>
                <?php endif; ?>
                <div class="registro-der-img">
                    <img src="../assets/registro-img.svg" alt="">
                </div>
            </div>
        </article>
    </section>

    <footer class="footer">
        <div class="git-container">
            <div class="git-linea"></div>
            <a href="https://github.com/Franco-Navarro/Proyecto-Final" target="_blank"><svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 0C5.81963 0 0 5.72826 0 12.7959C0 18.4485 3.72378 23.2453 8.89042 24.9388C9.54081 25.0543 9.77542 24.6604 9.77542 24.3217C9.77542 24.0177 9.76499 23.212 9.76108 22.1459C6.14418 22.9182 5.38039 20.4293 5.38039 20.4293C4.79126 18.9514 3.93754 18.5575 3.93754 18.5575C2.75797 17.7634 4.02747 17.7814 4.02747 17.7814C5.33347 17.8712 6.01775 19.1002 6.01775 19.1002C7.17776 21.0554 9.06246 20.4909 9.80018 20.1637C9.91879 19.3363 10.2577 18.7718 10.6278 18.4523C7.74213 18.1303 4.70784 17.0321 4.70784 12.1275C4.70784 10.733 5.21486 9.58859 6.04251 8.69567C5.91087 8.37109 5.4612 7.06892 6.17155 5.30875C6.17155 5.30875 7.26248 4.96364 9.74544 6.61861C10.8059 6.33467 11.8997 6.18973 12.9987 6.18755C14.0977 6.18931 15.1916 6.33425 16.252 6.61861C18.7362 4.96236 19.8258 5.30875 19.8258 5.30875C20.5362 7.06892 20.0904 8.37109 19.9549 8.69567C20.7891 9.58859 21.2896 10.7317 21.2896 12.1275C21.2896 17.045 18.2527 18.1252 15.3565 18.4421C15.8192 18.8372 16.2363 19.6172 16.2363 20.8103C16.2363 22.5218 16.2207 23.9022 16.2207 24.3217C16.2207 24.6643 16.4527 25.062 17.1161 24.9362C22.2801 23.2402 26 18.4472 26 12.7959C26 5.72826 20.1804 0 13 0Z" fill="#F6F6F6"/>
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
</script>

</html>