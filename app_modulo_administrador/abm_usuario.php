<?php
    include("../scriptsPHP/manejoSesion.inc");

?>

<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindlent</title>
    <link rel="icon" href="assets/icono.svg"/>
    <link rel="stylesheet" href="../app_modulo_usuario/styles/componentes.css">
    <link rel="stylesheet" href="../app_modulo_usuario/styles/modoOscuro.css">
    <link rel="stylesheet" href="../app_modulo_usuario/styles/base.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
</head>

<body id="body">
    <header class="header" id="home">
        <div class="header-logo">
            <a href="index.php"><img src="assets/logo.svg" alt=""></a>
        </div>
    </header>

    <nav class="navegador" id="navegador">
        <button class="navegador-boton" id="navegador-boton">
            <svg width="15" height="24" viewBox="0 0 15 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.4101 24C2.09475 24.0018 1.78213 23.9413 1.49018 23.8221C1.19824 23.7028 0.932697 23.5271 0.708795 23.3051C0.484202 23.0823 0.305938 22.8173 0.184286 22.5253C0.0626333 22.2333 0 21.9201 0 21.6038C0 21.2874 0.0626333 20.9742 0.184286 20.6822C0.305938 20.3902 0.484202 20.1252 0.708795 19.9024L8.64025 12.0189L1.0203 4.08745C0.574006 3.63849 0.323503 3.03117 0.323503 2.39812C0.323503 1.76508 0.574006 1.15775 1.0203 0.708795C1.24306 0.484202 1.50808 0.305937 1.80009 0.184285C2.09209 0.0626322 2.40528 0 2.72161 0C3.03794 0 3.35114 0.0626322 3.64314 0.184285C3.93514 0.305937 4.20016 0.484202 4.42292 0.708795L13.6723 10.2936C14.1113 10.7416 14.3573 11.3438 14.3573 11.971C14.3573 12.5982 14.1113 13.2004 13.6723 13.6483L4.08745 23.2332C3.87237 23.4654 3.6134 23.6528 3.3255 23.7844C3.0376 23.916 2.72648 23.9893 2.4101 24Z" />
                </svg>
        </button>
        <ul class="navegador-lista">
            <li id="boton-inicio">
                <a href="abm_usuario.php">
                    <svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4444 14.2222C13.8509 14.2222 15.2257 13.8052 16.3952 13.0238C17.5646 12.2424 18.476 11.1318 19.0143 9.83242C19.5525 8.53303 19.6933 7.10322 19.4189 5.7238C19.1445 4.34438 18.4673 3.07731 17.4728 2.0828C16.4783 1.08829 15.2112 0.411025 13.8318 0.136641C12.4523 -0.137743 11.0225 0.00308114 9.72314 0.541304C8.42375 1.07953 7.31315 1.99098 6.53177 3.16039C5.75039 4.32981 5.33333 5.70467 5.33333 7.11111C5.33333 8.9971 6.08254 10.8058 7.41613 12.1394C8.74972 13.473 10.5585 14.2222 12.4444 14.2222ZM23.1111 32C23.5826 32 24.0348 31.8127 24.3682 31.4793C24.7016 31.1459 24.8889 30.6937 24.8889 30.2222C24.8889 26.9217 23.5778 23.7565 21.244 21.4227C18.9102 19.0889 15.7449 17.7778 12.4444 17.7778C9.14397 17.7778 5.97868 19.0889 3.64489 21.4227C1.31111 23.7565 4.91809e-08 26.9217 0 30.2222C0 30.6937 0.187301 31.1459 0.520699 31.4793C0.854097 31.8127 1.30628 32 1.77778 32H23.1111Z" fill="#1A1A1A"/>
                        </svg>
                    <label for="">Usuarios</label>
                </a>
            </li>
            <li id="boton-perfil">
                <a href="abm_libro.php">
                    <svg width="29" height="32" viewBox="0 0 29 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.6667 0H5.33333C3.91885 0 2.56229 0.561903 1.5621 1.5621C0.561903 2.56229 0 3.91885 0 5.33333V26.6667C0 28.0812 0.561903 29.4377 1.5621 30.4379C2.56229 31.4381 3.91885 32 5.33333 32H26.6667C27.1382 32 27.5903 31.8127 27.9237 31.4793C28.2571 31.1459 28.4444 30.6937 28.4444 30.2222V1.77778C28.4444 1.30628 28.2571 0.854097 27.9237 0.520699C27.5903 0.187301 27.1382 0 26.6667 0ZM5.33333 28.4444C4.86184 28.4444 4.40965 28.2571 4.07625 27.9237C3.74286 27.5903 3.55556 27.1382 3.55556 26.6667C3.55556 26.1952 3.74286 25.743 4.07625 25.4096C4.40965 25.0762 4.86184 24.8889 5.33333 24.8889H24.8889V28.4444H5.33333Z" fill="#1A1A1A"/>
                        </svg>
                    <label for="">Libros</label>
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
    <main class="main" id="main">
        <section class="formABM-seccion" id="seccion-formABM">
            <article class="formABM-contenido">
                    <form action="" class="formABM">
                        <div class="formABM-titulo">
                            <h2>Nuevo Usuario</h2>
                        </div>
                        <div class="formABM-input">
                            <label for="">Usuario</label>
                            <input type="text">
                        </div>
                        <div class="formABM-input">
                            <label for="">Contraseña</label>
                            <input type="text">
                        </div>
                        <div class="formABM-input">
                            <label for="">Email</label>
                            <input type="text">
                        </div>
                        <div class="formABM-input">
                            <label for="">Nivel</label>
                            <input type="text">
                        </div>
                        <div class="formABM-botones">
                            <button>Alta</button>
                            <button>Limpiar</button>
                        </div>
                    </form>
            </article>
        </section>
    
        <section class="tablas-seccion"  id="seccion-tablas">
            <article class="tablas-contenido">
                    <table class="tabla">
                        <thead class="tabla-cabecera">
                            <tr>
                                <th>USUARIO</th>
                                <th>CONTRASEÑA</th>
                                <th>EMAIL</th>
                                <th>NIVEL</th>
                            </tr>
                        </thead>
                        <tbody class="tabla-cuerpo">
                            <tr>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor labore, quisquam, quod quaerat sit molestiae reiciendis distinctio, harum pariatur velit molestias nam possimus voluptas tenetur! Odio reprehenderit quibusdam id earum, doloribus, suscipit mollitia dolor vitae libero, expedita quia eaque atque reiciendis possimus. Non doloribus, doloremque qui dolor atque ut, modi soluta, ipsum molestiae assumenda tempora eligendi. Consequatur hic, ut nihil est totam culpa, esse sed rem saepe aperiam repellat! Magni enim repellat unde temporibus et possimus natus labore, ipsam laborum eius libero expedita nulla, eos dignissimos modi magnam laboriosam sint quo, molestiae officiis vel! Voluptates blanditiis placeat tenetur est eveniet!</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor labore, quisquam, quod quaerat sit molestiae reiciendis distinctio, harum pariatur velit molestias nam possimus voluptas tenetur! Odio reprehenderit quibusdam id earum, doloribus, suscipit mollitia dolor vitae libero, expedita quia eaque atque reiciendis possimus. Non doloribus, doloremque qui dolor atque ut, modi soluta, ipsum molestiae assumenda tempora eligendi. Consequatur hic, ut nihil est totam culpa, esse sed rem saepe aperiam repellat! Magni enim repellat unde temporibus et possimus natus labore, ipsam laborum eius libero expedita nulla, eos dignissimos modi magnam laboriosam sint quo, molestiae officiis vel! Voluptates blanditiis placeat tenetur est eveniet!</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor labore, quisquam, quod quaerat sit molestiae reiciendis distinctio, harum pariatur velit molestias nam possimus voluptas tenetur! Odio reprehenderit quibusdam id earum, doloribus, suscipit mollitia dolor vitae libero, expedita quia eaque atque reiciendis possimus. Non doloribus, doloremque qui dolor atque ut, modi soluta, ipsum molestiae assumenda tempora eligendi. Consequatur hic, ut nihil est totam culpa, esse sed rem saepe aperiam repellat! Magni enim repellat unde temporibus et possimus natus labore, ipsam laborum eius libero expedita nulla, eos dignissimos modi magnam laboriosam sint quo, molestiae officiis vel! Voluptates blanditiis placeat tenetur est eveniet!</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor labore, quisquam, quod quaerat sit molestiae reiciendis distinctio, harum pariatur velit molestias nam possimus voluptas tenetur! Odio reprehenderit quibusdam id earum, doloribus, suscipit mollitia dolor vitae libero, expedita quia eaque atque reiciendis possimus. Non doloribus, doloremque qui dolor atque ut, modi soluta, ipsum molestiae assumenda tempora eligendi. Consequatur hic, ut nihil est totam culpa, esse sed rem saepe aperiam repellat! Magni enim repellat unde temporibus et possimus natus labore, ipsam laborum eius libero expedita nulla, eos dignissimos modi magnam laboriosam sint quo, molestiae officiis vel! Voluptates blanditiis placeat tenetur est eveniet!</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>fafafaaffafafac2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>v</td>
                                <td>vc</td>
                                <td>c2</td>
                            </tr>
                        </tbody>
                    </table>
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