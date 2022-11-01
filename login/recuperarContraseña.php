<?php

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

<body id="body">
    <header class="header" id="home">
        <div class="header-logo">
            <a href="recuperarContraseña.html"><img src="../assets/logo.svg" alt=""></a>
        </div>
    </header>

    <!--SECCION DE RECUPERAR CONTRASEÑA-->
    <section class="recuperar-seccion" id="seccion-recuperar">
        <article class="recuperar-contenido">
            <div class="recuperar-contenido-div">
                <h3 class="recuperar-titulo">Restablecer la Contraseña</h3>
                <form id="form-recuperar" class="recuperar-form">
                    <div class="recuperar-form-input">
                        <label for="usuario-reg">Nombre de Usuario</label>
                        <input type="text" name="usuario-recu" id="usuario-recu" required minlength="5" maxlength="40"
                            pattern="[A-Za-z0-9]+">
                    </div>
                    <div class="recuperar-form-input">
                        <label for="contraseña-reg">Email</label>
                        <input type="email" name="email-recu" id="email-recu" required
                            pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$">
                    </div>
                    <div class="recuperar-form-buttons">
                        <div class="recuperar-form-button">
                            <a href="InicioSesion.php">Atras</a>
                        </div>
                        <div class="recuperar-form-button">
                            <button id="recuperar-siguiente">Siguiente</button>
                        </div>
                    </div>
                </form>

                <form id="form-recuperar-dos" class="recuperar-form none">
                    <div class="recuperar-form-input">
                        <label for="contraseña-recu">Nueva Contraseña</label>
                        <input type="password" name="contraseña-recu" id="contraseña-recu" required minlength="8"
                            maxlength="32" title="Tamaño mínimo: 8. Tamaño máximo: 32">
                    </div>
                    <div class="recuperar-form-input">
                        <label for="contraseña-copia-recu">Vuelva a escribir la contraseña</label>
                        <input type="password" name="contraseña-copia-recu" id="contraseña-copia-recu" required
                            minlength="8" maxlength="32" title="Tamaño mínimo: 8. Tamaño máximo: 32">
                    </div>
                    <div class="recuperar-form-buttons">
                        <div class="recuperar-form-button">
                            <button id="recuperar-contraseña-atra">Atras</button>
                        </div>
                        <div class="recuperar-form-button">
                            <button id="recuperar-contraseña">Restablecer</button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </section>

    <footer class="footer">
    </footer>

    <script src="recuperar.js"></script>
</body>

</html>