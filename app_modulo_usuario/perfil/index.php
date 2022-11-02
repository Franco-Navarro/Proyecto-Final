<?php
include("../../scriptsPHP/manejoSesion.inc");

if ($_SESSION['rol'] != 2) {
    if($_SESSION["tema_oscuro"] == 1) {
        $tema = "class='dark'";
    }
    else {
        $tema = "class=''";
    }
}
else {
    $tema = "class=''";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/perfil.css">
    <link rel="stylesheet" type="text/css" href="../../styles/base.css">
    <link rel="stylesheet" type="text/css" href="../../styles/componentes.css">
    <link rel="stylesheet" type="text/css" href="../../styles/modoOscuro.css">
    <title>Kindlen`t</title>
    <link rel="icon" href="../../assets/icono.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body id="body" <?php echo $tema ?>>
<header class="header">
        <div class="header-logo">
            <a href="index.php">
                <svg width="161" height="36" viewBox="0 0 161 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.279 30L21.897 19.737V30H17.277V6.966H21.897V17.295L30.279 6.966H35.856L26.352 18.384L36.12 30H30.279ZM41.1388 9.54C40.3248 9.54 39.6428 9.287 39.0928 8.781C38.5648 8.253 38.3008 7.604 38.3008 6.834C38.3008 6.064 38.5648 5.426 39.0928 4.92C39.6428 4.392 40.3248 4.128 41.1388 4.128C41.9528 4.128 42.6238 4.392 43.1518 4.92C43.7018 5.426 43.9768 6.064 43.9768 6.834C43.9768 7.604 43.7018 8.253 43.1518 8.781C42.6238 9.287 41.9528 9.54 41.1388 9.54ZM43.4158 11.718V30H38.7958V11.718H43.4158ZM57.7484 11.454C59.9264 11.454 61.6864 12.147 63.0284 13.533C64.3704 14.897 65.0414 16.811 65.0414 19.275V30H60.4214V19.902C60.4214 18.45 60.0584 17.339 59.3324 16.569C58.6064 15.777 57.6164 15.381 56.3624 15.381C55.0864 15.381 54.0744 15.777 53.3264 16.569C52.6004 17.339 52.2374 18.45 52.2374 19.902V30H47.6174V11.718H52.2374V13.995C52.8534 13.203 53.6344 12.587 54.5804 12.147C55.5484 11.685 56.6044 11.454 57.7484 11.454ZM67.8838 20.793C67.8838 18.945 68.2468 17.306 68.9728 15.876C69.7208 14.446 70.7328 13.346 72.0088 12.576C73.2848 11.806 74.7038 11.421 76.2658 11.421C77.4538 11.421 78.5868 11.685 79.6648 12.213C80.7428 12.719 81.6008 13.401 82.2388 14.259V5.58H86.9248V30H82.2388V27.294C81.6668 28.196 80.8638 28.922 79.8298 29.472C78.7958 30.022 77.5968 30.297 76.2328 30.297C74.6928 30.297 73.2848 29.901 72.0088 29.109C70.7328 28.317 69.7208 27.206 68.9728 25.776C68.2468 24.324 67.8838 22.663 67.8838 20.793ZM82.2718 20.859C82.2718 19.737 82.0518 18.78 81.6118 17.988C81.1718 17.174 80.5778 16.558 79.8298 16.14C79.0818 15.7 78.2788 15.48 77.4208 15.48C76.5628 15.48 75.7708 15.689 75.0448 16.107C74.3188 16.525 73.7248 17.141 73.2628 17.955C72.8228 18.747 72.6028 19.693 72.6028 20.793C72.6028 21.893 72.8228 22.861 73.2628 23.697C73.7248 24.511 74.3188 25.138 75.0448 25.578C75.7928 26.018 76.5848 26.238 77.4208 26.238C78.2788 26.238 79.0818 26.029 79.8298 25.611C80.5778 25.171 81.1718 24.555 81.6118 23.763C82.0518 22.949 82.2718 21.981 82.2718 20.859ZM95.694 5.58V30H91.074V5.58H95.694ZM116.891 20.463C116.891 21.123 116.847 21.717 116.759 22.245H103.394C103.504 23.565 103.966 24.599 104.78 25.347C105.594 26.095 106.595 26.469 107.783 26.469C109.499 26.469 110.72 25.732 111.446 24.258H116.429C115.901 26.018 114.889 27.47 113.393 28.614C111.897 29.736 110.06 30.297 107.882 30.297C106.122 30.297 104.538 29.912 103.13 29.142C101.744 28.35 100.655 27.239 99.8626 25.809C99.0926 24.379 98.7076 22.729 98.7076 20.859C98.7076 18.967 99.0926 17.306 99.8626 15.876C100.633 14.446 101.711 13.346 103.097 12.576C104.483 11.806 106.078 11.421 107.882 11.421C109.62 11.421 111.171 11.795 112.535 12.543C113.921 13.291 114.988 14.358 115.736 15.744C116.506 17.108 116.891 18.681 116.891 20.463ZM112.106 19.143C112.084 17.955 111.655 17.009 110.819 16.305C109.983 15.579 108.96 15.216 107.75 15.216C106.606 15.216 105.638 15.568 104.846 16.272C104.076 16.954 103.603 17.911 103.427 19.143H112.106ZM130.031 11.454C132.209 11.454 133.969 12.147 135.311 13.533C136.653 14.897 137.324 16.811 137.324 19.275V30H132.704V19.902C132.704 18.45 132.341 17.339 131.615 16.569C130.889 15.777 129.899 15.381 128.645 15.381C127.369 15.381 126.357 15.777 125.609 16.569C124.883 17.339 124.52 18.45 124.52 19.902V30H119.9V11.718H124.52V13.995C125.136 13.203 125.917 12.587 126.863 12.147C127.831 11.685 128.887 11.454 130.031 11.454ZM142.278 6.966H147.129L143.565 15.282H140.397L142.278 6.966ZM155.458 15.513V24.357C155.458 24.973 155.601 25.424 155.887 25.71C156.195 25.974 156.701 26.106 157.405 26.106H159.55V30H156.646C152.752 30 150.805 28.108 150.805 24.324V15.513H148.627V11.718H150.805V7.197H155.458V11.718H159.55V15.513H155.458Z" fill="#F6F6F6"></path>
                    <path d="M15 33.3H160.606V34.95H15V33.3Z" fill="#F6F6F6"></path>
                    <path d="M19 7H3.75C2.75544 7 1.70326 7.78111 1 8.5C0.296739 9.21889 0 9.81667 0 10.8333V26.1667C0 27.1833 0.395088 28.1584 1.09835 28.8772C1.80161 29.5961 2.75544 30 3.75 30H18.75C19.0815 30 19.3995 29.8654 19.6339 29.6257C19.8683 29.3861 20 29.0611 20 28.7222V8.27778C20 7.93889 19.8683 7.61388 19.6339 7.37425C19.3995 7.13462 19.3315 7 19 7ZM3.75 27.4444C3.41848 27.4444 3.10054 27.3098 2.86612 27.0702C2.6317 26.8306 2.5 26.5056 2.5 26.1667C2.5 25.8278 2.6317 25.5028 2.86612 25.2631C3.10054 25.0235 3.41848 24.8889 3.75 24.8889H17.5V27.4444H3.75Z" fill="#F6F6F6"></path>
                </svg>
            </a>
        </div>
    </header>
    <main class="main" id="main">
        <section class="seccion-perfil" id="seccion-perfil">
            <h1 class="seccion-perfil-titulo">Bienvenido Pepe</h1>
            <article class="perfil-detalle">
                <div class="perfil-datos">
                    <h3>Datos del usuario</h3>
                    <div class="perfil-datos-contenedor">
                        <div>
                            <p><b>Usuario</b></p>
                            <p id="usuario">Pepe123</p>
                        </div>
                        <div>
                            <p><b>Email</b></p>
                            <p id="email">Pepe123@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="perfil-suscripcion">
                    <h3>Nivel de suscripcion</h3>
                    <div class="perfil-suscripcion-contenedor">
                        <div>
                            <h4 id="rol">Premium</h4>
                            <h4 id="vencimiento">Vence el 25/08/2022</h4>
                        </div>
                        <a href="" id="cambiar-suscripcion">Cambiar nivel de Suscripcion</a>
                    </div>
                    <div class="perfil-comprobante-contenedor">
                        <a href="">Comprobante - 26/07/2022</a>
                        <a href="">Comprobante - 26/06/2022</a>
                        <a href="">Comprobante - 26/05/2022</a>
                        <a href="">Comprobante - 26/04/2022</a>
                        <a href="">Comprobante - 26/03/2022</a>
                        <a href="">Comprobante - 26/02/2022</a>
                    </div>
                </div>
                <div class="perfil-configuracion">
                    <h3>Configuracion</h3>
                    <div class="perfil-configuracion-contenedor">
                        <a href="" id="cambiar-tema">Color de Tema</a>
                        <a href="" id="cambiar-contraseña">Cambiar Contraseña</a>
                        <a href="" id="comentario">Envianos tu comentario</a>
                        <a href="" id="ayuda">Ayuda</a>
                    </div>
                </div>
            </article>
        </section>

        <section class="seccion-contacto none" id="seccion-comentario">
            <div class="seccion-contacto-volver" id="seccion-comentario-volver">
                <button>
                    <svg width="11" height="18" viewBox="0 0 11 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.96049 2.84832e-05C9.19701 -0.00133894 9.43147 0.0439936 9.65043 0.133428C9.86939 0.222863 10.0685 0.354643 10.2365 0.521206C10.4049 0.688275 10.5386 0.887041 10.6299 1.10604C10.7211 1.32504 10.7681 1.55994 10.7681 1.79719C10.7681 2.03443 10.7211 2.26933 10.6299 2.48833C10.5386 2.70733 10.4049 2.9061 10.2365 3.07317L4.28788 8.98582L10.0028 14.9344C10.3376 15.2711 10.5254 15.7266 10.5254 16.2014C10.5254 16.6762 10.3376 17.1317 10.0028 17.4684C9.83577 17.6368 9.637 17.7705 9.418 17.8618C9.199 17.953 8.9641 18 8.72686 18C8.48961 18 8.25471 17.953 8.03571 17.8618C7.81671 17.7705 7.61794 17.6368 7.45088 17.4684L0.513848 10.2798C0.18456 9.94383 0.000117216 9.49217 0.000117258 9.02176C0.000117299 8.55135 0.18456 8.09969 0.513848 7.76375L7.70248 0.575118C7.86379 0.400916 8.05801 0.260403 8.27394 0.161694C8.48986 0.0629855 8.72321 0.00803886 8.96049 2.84832e-05V2.84832e-05Z" />
                    </svg>
                    Volver
                </button>
            </div>
            <article class="contacto-contenido">
                <form action="" class="contacto-form">
                    <div class="contacto-form-titulo">
                        <h2>Envianos tu comentario</h2>
                        <h4>Tu opinion nos ayuda a Mejorar</h4>
                    </div>
                    <div class="contacto-form-inputs">
                        <div class="contacto-form-input">
                            <label for="nombre">Tu Nombre</label>
                            <input type="text" id="comentario-nombre">
                        </div>
                        <div class="contacto-form-input">
                            <label for="email">Tu Email</label>
                            <input type="mail" id="comentario-email">
                        </div>
                        <div class="contacto-form-input">
                            <label for="comentario">Tu Comentario</label>
                            <textarea name="comentario" cols="30" rows="10" id="comentario-comentario"></textarea>
                        </div>
                    </div>
                    <div class="contacto-form-boton">
                        <button id="enviar-mail">Enviar</button>
                    </div>
                </form>
            </article>
        </section>

        <div class="registro-salir none" id="registro-salir">
            <button>
                <svg width="11" height="18" viewBox="0 0 11 18" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.96049 2.84832e-05C9.19701 -0.00133894 9.43147 0.0439936 9.65043 0.133428C9.86939 0.222863 10.0685 0.354643 10.2365 0.521206C10.4049 0.688275 10.5386 0.887041 10.6299 1.10604C10.7211 1.32504 10.7681 1.55994 10.7681 1.79719C10.7681 2.03443 10.7211 2.26933 10.6299 2.48833C10.5386 2.70733 10.4049 2.9061 10.2365 3.07317L4.28788 8.98582L10.0028 14.9344C10.3376 15.2711 10.5254 15.7266 10.5254 16.2014C10.5254 16.6762 10.3376 17.1317 10.0028 17.4684C9.83577 17.6368 9.637 17.7705 9.418 17.8618C9.199 17.953 8.9641 18 8.72686 18C8.48961 18 8.25471 17.953 8.03571 17.8618C7.81671 17.7705 7.61794 17.6368 7.45088 17.4684L0.513848 10.2798C0.18456 9.94383 0.000117216 9.49217 0.000117258 9.02176C0.000117299 8.55135 0.18456 8.09969 0.513848 7.76375L7.70248 0.575118C7.86379 0.400916 8.05801 0.260403 8.27394 0.161694C8.48986 0.0629855 8.72321 0.00803886 8.96049 2.84832e-05V2.84832e-05Z" />
                </svg>
                Salir
            </button>
        </div>
        <!--SECCION DE REGISTRO TIPO DE SUSCRIPCION-->
        <section class="tipo-suscripcion-seccion none" id="seccion-suscripcion">
            <article class="tipo-suscripcion-contenido">
                <div class="tipo-suscripcion-gratuita">
                    <div class="tipo-suscripcion-titulo">
                        <h2>Acceso gratuito</h2>
                        <h3>Gratis</h3>
                    </div>
                    <div class="tipo-suscripcion-detalle">
                        <p>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#F6F6F6" />
                            </svg>
                            Acceso al catalogo basico
                        </p>
                        <p>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6" />
                            </svg>
                            Acceso al catalogo Premium
                        </p>
                        <p>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6" />
                            </svg>
                            Agregar libros a favoritos
                        </p>
                        <p>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6" />
                            </svg>
                            Tema Oscuro
                        </p>
                        <p>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6" />
                            </svg>
                            Recomendaciones Personalizadas
                        </p>
                    </div>
                    <div class="tipo-suscripcion-button">
                        <button id="suscripcion-gratuita">Suscribirse</button>
                    </div>
                </div>
                <div class="tipo-suscripcion-premium">
                    <div class="tipo-suscripcion-titulo">
                        <h2>Acceso Completo</h2>
                        <h3>$500AR por mes</h3>
                    </div>

                    <div class="tipo-suscripcion-detalle">
                        <p>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A" />
                            </svg>
                            Acceso al catalogo basico
                        </p>
                        <p>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A" />
                            </svg>
                            Acceso al catalogo Premium
                        </p>
                        <p>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A" />
                            </svg>
                            Agregar libros a favoritos
                        </p>
                        <p>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A" />
                            </svg>
                            Tema Oscuro
                        </p>
                        <p>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A" />
                            </svg>
                            Recomendaciones Personalizadas
                        </p>
                    </div>
                    <div class="tipo-suscripcion-button">
                        <button id="suscripcion-premium">Suscribirse</button>
                    </div>
                </div>
            </article>
        </section>

        <!--SECCION DE REGISTRO DATOS DE LA TARJETA-->
        <section class="datos-tarjeta-seccion none" id="seccion-tarjeta">
            <article class="datos-tarjeta-contenido">
                <div class="datos-tarjeta-form">
                    <div class="datos-tarjeta-form-titulo">
                        <h2>Datos de la tarjeta</h2>
                    </div>
                    <div class="datos-tarjeta-form-input">
                        <label for="numero">Numero de tarjeta</label>
                        <input type="text" name="numero" id="numero-tarjeta" required pattern="[0-9]{16}" max="19">
                    </div>
                    <div class="datos-tarjeta-form-input">
                        <label for="nombre">Nombre y apellido</label>
                        <input type="text" name="nombre" id="nombre-tarjeta" required max="19">
                    </div>
                    <div class="datos-tarjeta-form-medio">
                        <div class="datos-tarjeta-form-input">
                            <label for="fecha">Fecha de expiracion</label>
                            <input type="text" name="fecha" id="fecha-tarjeta" required max="5">
                        </div>
                        <div class="datos-tarjeta-form-input">
                            <label for="codigo">Codigo de seguridad</label>
                            <input type="text" name="codigo" id="codigo-tarjeta" required pattern="[0-9]{3}">
                        </div>
                    </div>
                    <div class="datos-tarjeta-form-input">
                        <label for="dni">DNI del titular de la tarjeta</label>
                        <input type="text" name="dni" id="dni-tarjeta" required pattern="[0-9]{8}">
                    </div>
                    <div class="datos-tarjeta-form-button">
                        <button id="tarjeta-boton">Confirmar</button>
                    </div>
                </div>
                <div class="datos-tarjeta-tarjeta">
                    <div class="datos-tarjeta-tarjeta-deco">
                        <div></div>
                    </div>
                    <div class="datos-tarjeta-tarjeta-detalle">
                        <p class="datos-tarjeta-tarjeta-detalle-numeros" id="mostrar-numeros">**** **** **** ****</p>
                        <div class="datos-tarjeta-tarjeta-detalle-nombre">
                            <p id="mostrar-nombre">Nombre y Apellido</p>
                            <p id="mostrar-fecha">MM/AA</p>
                        </div>
                    </div>
            </article>
        </section>
    </main>

    <script type="module" src="script.js"></script>


</body>

</html>