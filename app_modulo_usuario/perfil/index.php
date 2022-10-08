<?php
    include("../../scriptsPHP/manejoSesion.inc");
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
        <link rel="icon" href="../../assets/icono.svg"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    </head>
    
    <body id="body">
        <header class="header" id="home">
            <div class="header-logo">
                <a href="../menu/index.php"><img src="../../assets/logo.svg" alt=""></a>
            </div>
            <aside class="header-buscador" id="buscador-contenedor">
                <div class="header-buscador-filtro" id="buscador-filtro">
                    
                    <ul class="header-buscador-filtro-lista " id="buscador-filtro-lista">
                        <li>
                            <label for="autor">Autor</label>
                            <input type="checkbox" name="autor" id="autor">
                        </li>
                        <li>
                            <label for="genero">Genero</label>
                            <input type="checkbox" name="genero" id="genero">
                        </li>
                        <li>
                            <label for="titulo">Titulo</label>
                            <input type="checkbox" name="titulo" id="titulo">
                        </li>
                        <li>
                            <label for="gratis">Gratuito</label>
                            <input type="checkbox" name="gratis" id="gratis">
                        </li>
                    </ul>
                    <button class="header-buscador-filtro-boton" id="buscador-filtro-boton">
                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.86318e-05 1.80758C-0.00133894 1.57106 0.043993 1.3366 0.133429 1.11764C0.222864 0.898677 0.354643 0.699523 0.521206 0.531596C0.688274 0.363152 0.887041 0.229454 1.10604 0.138214C1.32504 0.0469752 1.55994 1.96046e-07 1.79719 1.93217e-07C2.03443 1.90387e-07 2.26933 0.0469752 2.48833 0.138214C2.70733 0.229454 2.9061 0.363152 3.07317 0.531596L8.98582 6.48019L14.9344 0.765227C15.2711 0.430505 15.7266 0.242627 16.2014 0.242627C16.6762 0.242627 17.1317 0.430505 17.4684 0.765227C17.6368 0.932296 17.7705 1.13106 17.8618 1.35006C17.953 1.56906 18 1.80396 18 2.04121C18 2.27846 17.953 2.51335 17.8618 2.73235C17.7705 2.95135 17.6368 3.15012 17.4684 3.31719L10.2798 10.2542C9.94383 10.5835 9.49217 10.768 9.02176 10.768C8.55135 10.768 8.09969 10.5835 7.76375 10.2542L0.575119 3.06559C0.400917 2.90428 0.260403 2.71005 0.161694 2.49413C0.0629864 2.2782 0.0080395 2.04486 2.86318e-05 1.80758Z" fill="#1A1A1A"/>
                        </svg>
                    </button>
                </div>
                <div class="header-buscador-barra">
                    <input type="text" class="header-buscador-barra-input" id="buscador-input">
                    <button class="header-buscador-barra-boton">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.6386 19.9036L17.4844 15.7616C18.8247 14.054 19.552 11.9454 19.5493 9.77463C19.5493 7.84139 18.976 5.95157 17.9019 4.34414C16.8279 2.73671 15.3013 1.48387 13.5152 0.744053C11.7291 0.00423516 9.76379 -0.189335 7.8677 0.187821C5.9716 0.564977 4.22993 1.49592 2.86293 2.86293C1.49592 4.22993 0.564977 5.9716 0.187821 7.8677C-0.189335 9.76379 0.00423516 11.7291 0.744053 13.5152C1.48387 15.3013 2.73671 16.8279 4.34414 17.9019C5.95157 18.976 7.84139 19.5493 9.77463 19.5493C11.9454 19.552 14.054 18.8247 15.7616 17.4844L19.9036 21.6386C20.0172 21.7531 20.1523 21.844 20.3012 21.906C20.4501 21.9681 20.6098 22 20.7711 22C20.9324 22 21.0921 21.9681 21.241 21.906C21.3899 21.844 21.525 21.7531 21.6386 21.6386C21.7531 21.525 21.844 21.3899 21.906 21.241C21.9681 21.0921 22 20.9324 22 20.7711C22 20.6098 21.9681 20.4501 21.906 20.3012C21.844 20.1523 21.7531 20.0172 21.6386 19.9036ZM2.44366 9.77463C2.44366 8.3247 2.87362 6.90733 3.67915 5.70176C4.48469 4.49619 5.62963 3.55656 6.96919 3.0017C8.30875 2.44683 9.78276 2.30166 11.2048 2.58452C12.6269 2.86739 13.9332 3.5656 14.9584 4.59085C15.9837 5.61611 16.6819 6.92236 16.9647 8.34443C17.2476 9.7665 17.1024 11.2405 16.5476 12.5801C15.9927 13.9196 15.0531 15.0646 13.8475 15.8701C12.6419 16.6756 11.2246 17.1056 9.77463 17.1056C7.83034 17.1056 5.96568 16.3332 4.59085 14.9584C3.21603 13.5836 2.44366 11.7189 2.44366 9.77463Z" fill="#1A1A1A"/>
                            </svg>
                    </button>
                </div>
            </aside>
        </header>
    
        <main class="main">
            <section class="seccion-perfil" id="seccion-perfil">
                <h1 class="seccion-perfil-titulo">Bienvenido Pepe</h1> 
                <article class="perfil-detalle">
                    <div class="perfil-datos">
                        <h3>Datos del usuario</h3>
                        <div class="perfil-datos-contenedor">
                            <div>
                                <p><b>Usuario</b></p>
                                <p>Pepe123</p>
                            </div>
                            <div>
                                <p><b>Email</b></p>
                                <p>Pepe123@gmail.com</p>
                            </div>
                            <div>
                                <p><b>Tarjeta</b></p>
                                <p>**** **** **** 1305</p>
                            </div>
                            <div>
                                <p><b>Titular tarjeta</b></p>
                                <p>Pepe Gutierrez</p>
                            </div>
                        </div>
                    </div>
                    <div class="perfil-suscripcion">
                        <h3>Nivel de suscripcion</h3>
                        <div class="perfil-suscripcion-contenedor">
                            <div>
                                <h4>Premium</h4>
                                <h4>Vence el 25/08/2022</h4>
                            </div>
                            <a href="" id="cambiar-suscripcion">Cambiar nivel de Suscripcion</a>
                            <a href="">Cancelar Suscripcion</a>
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
                            <a href="">Color de Tema</a>
                            <a href="">Cambiar Contraseña</a>
                            <a href="" id="comentario">Envianos tu comentario</a>
                            <a href="">Ayuda</a>
                        </div>
                    </div>
                </article>
            </section>

            <section class="seccion-contacto none" id="seccion-comentario">
                <div class="seccion-contacto-volver" id="seccion-comentario-volver" >
                    <button>
                    <svg width="11" height="18" viewBox="0 0 11 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.96049 2.84832e-05C9.19701 -0.00133894 9.43147 0.0439936 9.65043 0.133428C9.86939 0.222863 10.0685 0.354643 10.2365 0.521206C10.4049 0.688275 10.5386 0.887041 10.6299 1.10604C10.7211 1.32504 10.7681 1.55994 10.7681 1.79719C10.7681 2.03443 10.7211 2.26933 10.6299 2.48833C10.5386 2.70733 10.4049 2.9061 10.2365 3.07317L4.28788 8.98582L10.0028 14.9344C10.3376 15.2711 10.5254 15.7266 10.5254 16.2014C10.5254 16.6762 10.3376 17.1317 10.0028 17.4684C9.83577 17.6368 9.637 17.7705 9.418 17.8618C9.199 17.953 8.9641 18 8.72686 18C8.48961 18 8.25471 17.953 8.03571 17.8618C7.81671 17.7705 7.61794 17.6368 7.45088 17.4684L0.513848 10.2798C0.18456 9.94383 0.000117216 9.49217 0.000117258 9.02176C0.000117299 8.55135 0.18456 8.09969 0.513848 7.76375L7.70248 0.575118C7.86379 0.400916 8.05801 0.260403 8.27394 0.161694C8.48986 0.0629855 8.72321 0.00803886 8.96049 2.84832e-05V2.84832e-05Z"/>
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
                                <label for="">Tu Nombre</label>
                                <input type="text">
                            </div>
                            <div class="contacto-form-input">
                                <label for="">Tu Email</label>
                                <input type="mail">
                            </div>
                            <div class="contacto-form-input">
                                <label for="">Tu Comentario</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="contacto-form-boton">
                            <button>Enviar</button>
                        </div>
                    </form>
                </article>
            </section>
            
            <div class="registro-salir none" id="registro-salir" >
                <button>
                <svg width="11" height="18" viewBox="0 0 11 18" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.96049 2.84832e-05C9.19701 -0.00133894 9.43147 0.0439936 9.65043 0.133428C9.86939 0.222863 10.0685 0.354643 10.2365 0.521206C10.4049 0.688275 10.5386 0.887041 10.6299 1.10604C10.7211 1.32504 10.7681 1.55994 10.7681 1.79719C10.7681 2.03443 10.7211 2.26933 10.6299 2.48833C10.5386 2.70733 10.4049 2.9061 10.2365 3.07317L4.28788 8.98582L10.0028 14.9344C10.3376 15.2711 10.5254 15.7266 10.5254 16.2014C10.5254 16.6762 10.3376 17.1317 10.0028 17.4684C9.83577 17.6368 9.637 17.7705 9.418 17.8618C9.199 17.953 8.9641 18 8.72686 18C8.48961 18 8.25471 17.953 8.03571 17.8618C7.81671 17.7705 7.61794 17.6368 7.45088 17.4684L0.513848 10.2798C0.18456 9.94383 0.000117216 9.49217 0.000117258 9.02176C0.000117299 8.55135 0.18456 8.09969 0.513848 7.76375L7.70248 0.575118C7.86379 0.400916 8.05801 0.260403 8.27394 0.161694C8.48986 0.0629855 8.72321 0.00803886 8.96049 2.84832e-05V2.84832e-05Z"/>
                    </svg>
                    Salir
                </button>
            </div>
            <!--SECCION DE REGISTRO TIPO DE SUSCRIPCION-->
            <section class="tipo-suscripcion-seccion none"  id="seccion-suscripcion">
                <article class="tipo-suscripcion-contenido">
                    <div class="tipo-suscripcion-gratuita">
                        <div class="tipo-suscripcion-titulo">
                            <h2>Acceso gratuito</h2>
                            <h3>Gratis</h3>
                        </div>
                        <div class="tipo-suscripcion-detalle">
                            <p>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#F6F6F6"/>
                                </svg>
                                Acceso al catalogo basico
                            </p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6"/>
                                </svg>
                                Acceso al catalogo Premium
                            </p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6"/>
                                </svg>
                                Agregar libros a favoritos
                            </p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6"/>
                                </svg>
                                Tema Oscuro
                            </p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" fill="#F6F6F6"/>
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
                                <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A"/>
                                </svg>
                                Acceso al catalogo basico
                            </p>
                            <p>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A"/>
                                    </svg>
                                Acceso al catalogo Premium
                            </p>
                            <p>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A"/>
                                    </svg>
                                Agregar libros a favoritos
                            </p>
                            <p>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A"/>
                                    </svg>
                                Tema Oscuro
                            </p>
                            <p>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" fill="#1A1A1A"/>
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
                                <p  id="mostrar-nombre">Nombre y Apellido</p>
                                <p  id="mostrar-fecha">MM/AA</p>
                            </div>
                        </div>
                </article>
            </section>
        </main>
    
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
        <script src="../../scripts/verificacionInputs.js"></script>
        <script src="../../scripts/crearMensaje.js"></script>
        <script src="../../scripts/filtroBuscador.js"></script>
        <script src="../../scripts/creacionNavegador.js"></script>
        <script src="script.js"></script>

    </body>
    
    </html>