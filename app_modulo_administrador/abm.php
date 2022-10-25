<?php
include("../scriptsPHP/manejoSesion.inc");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindlent</title>
    <link rel="icon" href="../assets/icono.svg" />
    <link rel="stylesheet" href="../styles/componentes.css">
    <link rel="stylesheet" href="../styles/modoOscuro.css">
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body id="body">
    <span class="cargandoContenedor none" id="cargando-contenedor">
        <div class="cargandoSVG">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="237px" height="237px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="50" cy="50" r="34" stroke-width="8" stroke="#F6F6F6" stroke-dasharray="53.40707511102649 53.40707511102649" fill="none" stroke-linecap="round">
                    <animateTransform attributeName="transform" type="rotate" dur="3.571428571428571s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                </circle>
                <circle cx="50" cy="50" r="25" stroke-width="8" stroke="#d9a25f" stroke-dasharray="39.269908169872416 39.269908169872416" stroke-dashoffset="39.269908169872416" fill="none" stroke-linecap="round">
                    <animateTransform attributeName="transform" type="rotate" dur="3.571428571428571s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;-360 50 50"></animateTransform>
                </circle>
            </svg>
        </div>
    </span>
    <main class="main " id="main-usuario">
        <section class="formABM-seccion">
            <article class="formABM-contenido">
                <form action="" class="formABM" id="formABM-usuario">
                    <div class="formABM-titulo">
                        <h2>Nuevo Usuario</h2>
                    </div>
                    <div class="formABM-input">
                        <label for="id-usuario">Id</label>
                        <input type="text" id="id-usuario" name="id-usuario" disabled>
                    </div>
                    <div class="formABM-input">
                        <label for="nombre">Nombre de Usuario</label>
                        <input type="text" id="nombre" name="nombre" required minlength="5" maxlength="40" pattern="[A-Za-z0-9]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 40">
                    </div>

                    <div class="formABM-input">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$">
                    </div>
                    <div class="formABM-input">
                        <label for="roles">Rol</label>
                        <select name="roles" id="roles" required>
                        </select>
                        <button id="insert-rol">+</button>
                    </div>
                    <div class="formABM-input">
                        <label for="contrasenia">Contraseña</label>
                        <input type="contrasenia" id="contrasenia" name="contrasenia" required minlength="8" maxlength="32" title="Tamaño mínimo: 8. Tamaño máximo: 32">
                    </div>
                    <div class="formABM-botones">
                        <input type="submit" value="Alta" id="alta-usuario">
                        <input type="submit" value="Modificar" id="modificar-usuario">
                        <input type="submit" value="Eliminar" id="baja-usuario">
                        <input type="reset" value="Limpiar">

                    </div>
                </form>
            </article>
        </section>
        <section class="tablas-seccion" id="tabla-user">
            <article class="tablas-contenido">
                <div class="tabla-botones">
                    <button id="cargar-tabla-usuario">Cargar Tabla</button>
                    <button id="vaciar-tabla-usuario">Vaciar Tabla</button>
                </div>
                <table class="tabla">
                    <thead class="tabla-cabecera">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>ROL</th>
                            <th>CONTRASEÑA</th>
                        </tr>
                    </thead>
                    <tbody class="tabla-cuerpo" id=tabla-cuerpo-usuario>

                    </tbody>
                </table>
            </article>
        </section>
    </main>
    <main class="main none" id="main-libro">
        <section class="formABM-seccion">
            <article class="formABM-contenido">
                <form action="" class="formABM" id="formABM-libro">
                    <div class="formABM-titulo">
                        <h2>Nuevo Libro</h2>
                    </div>
                    <div class="formABM-input">
                        <label for="id">Id</label>
                        <input type="text" id="id-libro" name="id-libro" disabled>
                    </div>
                    <div class="formABM-input">
                        <label for="titulo">Titulo</label>
                        <input type="text" id="titulo" name="titulo" required minlength="5" maxlength="40">
                    </div>
                    <div class="formABM-input">
                        <label for="autor">Autor</label>
                        <select name="autor" id="autor" required></select>
                        <button id="insert-autor">+</button>

                    </div>
                    <div class="formABM-input">
                        <label for="genero">Genero</label>
                        <select name="genero" id="genero" required></select>
                        <button id="insert-genero">+</button>

                    </div>
                    <div class="formABM-input">
                        <label for="saga">Saga</label>
                        <input type="text" id="saga" name="saga" required minlength="5" maxlength="40">
                    </div>
                    <div class="formABM-input">
                        <label for="paginas">Paginas</label>
                        <input type="text" id="paginas" name="paginas" required>
                    </div>
                    <div class="formABM-textarea">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" required pattern="[A-Za-z0-9]+"></textarea>
                    </div>

                    <div class="formABM-botones">
                        <input type="submit" value="Alta" id="alta-libro">
                        <input type="submit" value="Modificar" id="modificar-libro">
                        <input type="submit" value="Eliminar" id="baja-libro">
                        <input type="reset" value="Limpiar">
                        <input type="submit" value="Archivos" id="archivos-libro">
                    </div>
                </form>
            </article>
        </section>
        <section class="formABM-seccion none" id="formABM-seccion-archivo">
            <article class="formABM-contenido">
                <form action="" class="formABM" enctype="multipart/form-data" id="formABM-archivo">
                    <div class="formABM-titulo">
                        <h2>Cargar Archivos</h2>
                    </div>
                    <div class="formABM-input">
                        <label for="titulo-select">Titulos</label>
                        <select name="titulo-select" id="titulo-select"></select>
                    </div>
                    <div class="formABM-input">
                        <label for="pdf">Subir PDF</label>
                        <input type="file" name="pdf" id="pdf">
                    </div>
                    <div class="formABM-input">
                        <label for="portada">Subir Portada</label>
                        <input type="file" name="portada" id="portada">
                    </div>
                    <div class="formABM-botones">
                        <input type="submit" value="Cargar" id="cargar-archivo">
                        <input type="reset" value="Limpiar">
                    </div>
                </form>
            </article>
        </section>
        <section class="tablas-seccion" id="tabla-libro">
            <article class="tablas-contenido">
                <div class="tabla-botones">
                    <button id="cargar-tabla-libro">Cargar Tabla</button>
                    <button id="vaciar-tabla-libro">Vaciar Tabla</button>
                </div>
                <table class="tabla">
                    <thead class="tabla-cabecera">
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>AUTOR</th>
                            <th>GENERO</th>
                            <th>SAGA</th>
                            <th>PAGINAS</th>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody class="tabla-cuerpo" id="tabla-cuerpo-libro">

                    </tbody>
                </table>
            </article>
        </section>
    </main>
    <script type="module" src="script.js"></script>
</body>

</html>