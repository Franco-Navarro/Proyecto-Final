<?php
    include("../../scriptsPHP/manejoSesion.inc");
?>

<!DOCTYPE html>
    <html lang="es">
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/libroDetalle.css">
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
            <h1 class="seccion-libro-detalle-titulo">El camino de los reyes</h1>    
            <section class="seccion-libro-detalle">
                <article class="libro-detalle">
                    <div class="libro-detalle-contenedor">
                        <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                        <div class="libro-detalle-contenido">
                            <h2 class="libro-detalle-titulo">El camino de los reyes (El archivo de las tormenteas 1)</h2>
                            <h3 class="libro-detalle-autor">Brandon Sanderson</h3>
                            <p class="libro-detalle-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                                <button class="libro-detalle-leer-boton" id="comenzar-leer">Comenzar a leer <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.0144 20C1.75082 20.0015 1.48953 19.9511 1.24552 19.8517C1.0015 19.7524 0.779561 19.606 0.592421 19.4209C0.404703 19.2352 0.255707 19.0144 0.154029 18.7711C0.0523498 18.5277 0 18.2667 0 18.0031C0 17.7395 0.0523498 17.4785 0.154029 17.2352C0.255707 16.9919 0.404703 16.771 0.592421 16.5854L7.22164 10.0158L0.852783 3.40621C0.479762 3.03208 0.270388 2.52597 0.270388 1.99844C0.270388 1.4709 0.479762 0.964796 0.852783 0.590662C1.03897 0.403502 1.26048 0.254948 1.50454 0.15357C1.74859 0.0521935 2.01037 0 2.27476 0C2.53915 0 2.80093 0.0521935 3.04499 0.15357C3.28904 0.254948 3.51055 0.403502 3.69674 0.590662L11.4275 8.57803C11.7945 8.9513 12 9.45314 12 9.97582C12 10.4985 11.7945 11.0003 11.4275 11.3736L3.41635 19.361C3.23658 19.5545 3.02013 19.7107 2.7795 19.8203C2.53887 19.93 2.27883 19.9911 2.0144 20Z" fill="#1A1A1A"/>
                                    </svg>
                                </button>
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