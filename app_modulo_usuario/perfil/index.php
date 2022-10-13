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

        <main class="main" id="main">
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
    
        <script type="module" src="script.js"></script>
        

    </body>
    
    </html>