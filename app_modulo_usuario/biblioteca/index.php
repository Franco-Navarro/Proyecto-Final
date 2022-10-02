<?php
    include("../../scriptsPHP/manejoSesion.inc");
?>

<!DOCTYPE html>
    <html lang="es">
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <nav class="navegador" id="navegador">
            <button class="navegador-boton" id="navegador-boton">
                <svg width="15" height="24" viewBox="0 0 15 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.4101 24C2.09475 24.0018 1.78213 23.9413 1.49018 23.8221C1.19824 23.7028 0.932697 23.5271 0.708795 23.3051C0.484202 23.0823 0.305938 22.8173 0.184286 22.5253C0.0626333 22.2333 0 21.9201 0 21.6038C0 21.2874 0.0626333 20.9742 0.184286 20.6822C0.305938 20.3902 0.484202 20.1252 0.708795 19.9024L8.64025 12.0189L1.0203 4.08745C0.574006 3.63849 0.323503 3.03117 0.323503 2.39812C0.323503 1.76508 0.574006 1.15775 1.0203 0.708795C1.24306 0.484202 1.50808 0.305937 1.80009 0.184285C2.09209 0.0626322 2.40528 0 2.72161 0C3.03794 0 3.35114 0.0626322 3.64314 0.184285C3.93514 0.305937 4.20016 0.484202 4.42292 0.708795L13.6723 10.2936C14.1113 10.7416 14.3573 11.3438 14.3573 11.971C14.3573 12.5982 14.1113 13.2004 13.6723 13.6483L4.08745 23.2332C3.87237 23.4654 3.6134 23.6528 3.3255 23.7844C3.0376 23.916 2.72648 23.9893 2.4101 24Z" />
                    </svg>
            </button>
            <ul class="navegador-lista">
                
                <li id="boton-inicio">
                    <a href="../menu/index.php">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 0L32 17.0667H28V32H20V21.3333H12V32H4V17.0667H0L16 0Z" fill="#1A1A1A"/>
                        </svg>
                        <label for="">Inicio</label>
                    </a>
                </li>
                <li id="boton-perfil">
                    <a href="../perfil/index.php">
                        <svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4444 14.2222C13.8509 14.2222 15.2257 13.8052 16.3952 13.0238C17.5646 12.2424 18.476 11.1318 19.0143 9.83242C19.5525 8.53303 19.6933 7.10322 19.4189 5.7238C19.1445 4.34438 18.4673 3.07731 17.4728 2.0828C16.4783 1.08829 15.2112 0.411025 13.8318 0.136641C12.4523 -0.137743 11.0225 0.00308114 9.72314 0.541304C8.42375 1.07953 7.31315 1.99098 6.53177 3.16039C5.75039 4.32981 5.33333 5.70467 5.33333 7.11111C5.33333 8.9971 6.08254 10.8058 7.41613 12.1394C8.74972 13.473 10.5585 14.2222 12.4444 14.2222ZM23.1111 32C23.5826 32 24.0348 31.8127 24.3682 31.4793C24.7016 31.1459 24.8889 30.6937 24.8889 30.2222C24.8889 26.9217 23.5778 23.7565 21.244 21.4227C18.9102 19.0889 15.7449 17.7778 12.4444 17.7778C9.14397 17.7778 5.97868 19.0889 3.64489 21.4227C1.31111 23.7565 4.91809e-08 26.9217 0 30.2222C0 30.6937 0.187301 31.1459 0.520699 31.4793C0.854097 31.8127 1.30628 32 1.77778 32H23.1111Z" fill="#1A1A1A"/>
                        </svg>
                        <label for="">Perfil</label>
                    </a>
                </li>
                <li>
                    <a href="../biblioteca/index.php">
                    <svg width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H20V28L10 22L0 28V0Z" fill="#1A1A1A"/>
                        </svg>
                        <label for="">Favoritos</label>
                    </a>
                    
                </li>
                <li>
                    <a href="../../app_modulo_administrador/abm_usuario.php">
                        <svg  width="32" height="27" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8467 8.77998C19.8733 8.85331 19.9 8.92665 19.9 8.99998C19.9654 9.32933 19.9988 9.66421 20 9.99998C19.9964 10.312 19.9663 10.6231 19.91 10.93C19.9023 10.9684 19.8902 11.0054 19.8782 11.042C19.8589 11.1007 19.84 11.1584 19.84 11.22C19.7906 11.4164 19.7305 11.6101 19.66 11.8L19.54 12.09C19.452 12.2828 19.3518 12.4699 19.24 12.65L19.1 12.87C19.0856 12.898 19.0689 12.9248 19.05 12.95L19 13C18.5343 13.621 17.9303 14.125 17.2361 14.4721C16.5418 14.8193 15.7762 15 15 15H12V13.73C12.3023 13.9099 12.6482 14.0033 13 14C13.5296 13.9977 14.0366 13.7856 14.41 13.41C14.7825 13.0353 14.9916 12.5284 14.9916 12C14.9916 11.4716 14.7825 10.9647 14.41 10.59L11.41 7.58998C11.0366 7.21439 10.5296 7.00221 10 6.99998C9.4816 6.99945 8.98325 7.20022 8.61 7.55998L5.61 10.46C5.42073 10.6424 5.26928 10.8604 5.16432 11.1014C5.05936 11.3424 5.00294 11.6018 4.9983 11.8646C4.99365 12.1275 5.04087 12.3886 5.13726 12.6332C5.23364 12.8778 5.37729 13.101 5.56 13.29C5.94054 13.6756 6.45825 13.8949 7 13.9C7.35126 13.8994 7.69616 13.8062 8 13.63V15H5C4.22377 15 3.45821 14.8193 2.76393 14.4721C2.06965 14.125 1.46574 13.621 1 13L0.95 12.93C0.931113 12.9048 0.914387 12.878 0.9 12.85L0.76 12.63C0.64823 12.4499 0.548028 12.2628 0.46 12.07L0.34 11.78C0.269516 11.5901 0.209427 11.3964 0.16 11.2C0.152311 11.1615 0.140186 11.1246 0.128174 11.0879C0.108944 11.0293 0.0899999 10.9715 0.0899999 10.91C0.0347918 10.6097 0.0046879 10.3053 0 9.99998C0.00428374 9.68093 0.0377566 9.36293 0.0999999 9.04998C0.108333 9.00415 0.125347 8.95831 0.142361 8.91248C0.166181 8.84831 0.19 8.78415 0.19 8.71998C0.236288 8.52592 0.296442 8.33543 0.37 8.14998C0.42 8.02998 0.47 7.92998 0.55 7.77998C0.569999 7.74248 0.589998 7.70436 0.609997 7.66623C0.669998 7.55186 0.729999 7.43748 0.79 7.33998C0.87 7.20998 0.95 7.09998 1.05 6.97998C1.08041 6.94348 1.11175 6.90514 1.14345 6.86635C1.21599 6.7776 1.29041 6.68652 1.36 6.60998C1.43426 6.52829 1.51404 6.45763 1.59524 6.38571C1.62338 6.36079 1.65169 6.33572 1.68 6.30998L2.05 5.99998L2.41 5.69998C2.55132 5.6135 2.69832 5.53665 2.85 5.46998L3.24 5.28998C3.40334 5.22949 3.57034 5.17939 3.74 5.13998C3.8744 5.10044 4.0114 5.07037 4.15 5.04998L4.33 4.99998C4.73804 3.82103 5.50343 2.7986 6.51966 2.07494C7.5359 1.35129 8.75244 0.962402 10 0.962402C11.2476 0.962402 12.4641 1.35129 13.4803 2.07494C14.4966 2.7986 15.262 3.82103 15.67 4.99998L15.9 5.10998C16.0386 5.13037 16.1756 5.16044 16.31 5.19998C16.4797 5.23939 16.6467 5.28949 16.81 5.34998L17.2 5.52998C17.3517 5.59665 17.4987 5.6735 17.64 5.75998L18 5.99998L18.37 6.32998C18.399 6.35637 18.4274 6.38136 18.4554 6.40607C18.5335 6.47498 18.609 6.54165 18.69 6.62998C18.7193 6.66193 18.755 6.69742 18.7915 6.73382C18.8923 6.83412 19 6.94128 19 6.99998C19 7.04606 19.0398 7.08883 19.0908 7.14356C19.1283 7.18385 19.1718 7.23062 19.21 7.28998C19.3 7.42998 19.39 7.59998 19.45 7.72998C19.4758 7.78594 19.5035 7.84005 19.5306 7.8931C19.5666 7.96329 19.6015 8.03164 19.63 8.09998C19.7036 8.28543 19.7637 8.47592 19.81 8.66998C19.82 8.70665 19.8333 8.74331 19.8467 8.77998ZM10.0101 8.00415C10.2718 8.00415 10.5231 8.10678 10.7101 8.29001L13.7101 11.29C13.8038 11.383 13.8782 11.4936 13.929 11.6154C13.9797 11.7373 14.0059 11.868 14.0059 12C14.0059 12.132 13.9797 12.2627 13.929 12.3846C13.8782 12.5064 13.8038 12.617 13.7101 12.71C13.6171 12.8037 13.5065 12.8781 13.3847 12.9289C13.2628 12.9797 13.1321 13.0058 13.0001 13.0058C12.8681 13.0058 12.7374 12.9797 12.6155 12.9289C12.4936 12.8781 12.383 12.8037 12.2901 12.71L11.0001 11.41V17C11.0001 17.2652 10.8947 17.5196 10.7072 17.7071C10.5196 17.8947 10.2653 18 10.0001 18C9.73486 18 9.48051 17.8947 9.29297 17.7071C9.10543 17.5196 9.00008 17.2652 9.00008 17V11.36L7.69008 12.63C7.59809 12.7323 7.48598 12.8145 7.36076 12.8715C7.23555 12.9285 7.09993 12.959 6.96237 12.9612C6.82482 12.9634 6.6883 12.9371 6.56134 12.8842C6.43439 12.8312 6.31973 12.7526 6.22454 12.6532C6.12936 12.5539 6.05569 12.436 6.00815 12.3069C5.96061 12.1778 5.94021 12.0403 5.94824 11.903C5.95627 11.7656 5.99254 11.6314 6.0548 11.5088C6.11706 11.3861 6.20397 11.2776 6.31008 11.19L9.31008 8.29001C9.49701 8.10678 9.74832 8.00415 10.0101 8.00415Z" fill="#1A1A1A"/>
                        </svg>
                        <label for="">ABM</label>
                    </a>
                </li>
            </ul>
            <button class="navegador-salir" id="cerrar-sesion">
                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4 0H28.7999C30.5648 0 32 1.4352 32 3.2V25.6C32 27.3648 30.5648 28.8 28.7999 28.8H14.4C12.6352 28.8 11.2 27.3648 11.2 25.6V19.2H14.4V25.6H28.7999V3.2H14.4V9.6H11.2V3.2C11.2 1.4352 12.6352 0 14.4 0ZM8 12.8H22.4V16H8V20.8L0 14.4L8 8V12.8Z" fill="black"/>
                    </svg>
                    <label for="">Cerrar Sesion</label>
            </button>
        </nav>
    
        <main class="main">
            <section class="seccion-biblioteca">
                <h1 class="seccion-biblioteca-titulo">Tus Favoritos</h1> 
                <article class="biblioteca-detalle">
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
                    <article class="tarjeta-libro" id="tarjeta-libro">
                        <div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="../../assets/portada/El_camino_de_los_reyes.png" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">El camino de los reyes</h4>
                                <small class="tarjeta-libro-autor">Brandon Sanderson</small>
                                <p class="tarjeta-libro-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                    En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                            </div>
                        </div> 
                    </article>
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
    
        <script src="script.js"></script>
    </body>
    
    </html>