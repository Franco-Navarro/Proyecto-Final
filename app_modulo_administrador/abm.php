<?php
    include("../scriptsPHP/manejoSesion.inc");
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindlent</title>
    <link rel="icon" href="../assets/icono.svg"/>
    <link rel="stylesheet" href="../styles/componentes.css">
    <link rel="stylesheet" href="../styles/modoOscuro.css">
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
</head>

<body id="body">
    <main class="main " id="main-usuario">
        <section class="formABM-seccion" id="formABM-usuario">
                <article class="formABM-contenido">
                    <form action="" class="formABM">
                        <div class="formABM-titulo">
                            <h2>Nuevo Usuario</h2>
                        </div>
                        <div class="formABM-input">
                            <label for="usuario">Usuario</label>
                            <input type="text" id="usuario" name="usuario">
                        </div>
                        <div class="formABM-input">
                            <label for="contraseña">Contraseña</label>
                            <input type="text" id="contraseña" name="contraseña">
                        </div>
                        <div class="formABM-input">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="formABM-input">
                            <label for="nivelUsuario">Nivel</label>
                            <input type="number" id="nivelUsuario" name="nivelUsuario">
                        </div>
                        <div class="formABM-botones">
                            <button>Alta</button>
                            <button>Limpiar</button>
                        </div>
                    </form>
                </article>
        </section>
        <section class="tablas-seccion"  id="tabla-user">
            <article class="tablas-contenido">
            <div class="tabla-botones">
                <button id="cargar-tabla-usuario">Cargar Tabla</button>
                <button id="vaciar-tabla-usuario">Vaciar Tabla</button>
            </div>
                <table class="tabla">
                    <thead class="tabla-cabecera">
                        <tr>
                            <th>USUARIO</th>
                            <th>CONTRASEÑA</th>
                            <th>EMAIL</th>
                            <th>NIVEL</th>
                        </tr>
                    </thead>
                    <tbody class="tabla-cuerpo" id=tabla-cuerpo-usuario>

                    </tbody>
                </table>
            </article>
        </section>   
    </main>
    <main class="main none" id="main-libro">
        <section class="formABM-seccion" id="formABM-libro">
                <article class="formABM-contenido">
                    <form action="" class="formABM">
                        <div class="formABM-titulo">
                            <h2>Nuevo Libro</h2>
                        </div>
                        <div class="formABM-input">
                            <label for="titulo">Titulo</label>
                            <input type="text" id="titulo" name="titulo">
                        </div>
                        <div class="formABM-input">
                            <label for="autor">Autor</label>
                            <input type="text" id="autor" name="autor">
                        </div>
                        <div class="formABM-input">
                            <label for="genero">Genero</label>
                            <input type="text" id="genero" name="genero">
                        </div>
                        <div class="formABM-input">
                            <label for="saga">Saga</label>
                            <input type="text" id="saga" name="saga">
                        </div>
                        <div class="formABM-input">
                            <label for="nivelAcceso">Nivel</label>
                            <input type="number" id="nivelAcceso" name="nivelAcceso">
                        </div>
                        <div class="formABM-textarea">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                        </div>
                        <div class="formABM-botones">
                            <button>Alta</button>
                            <button>Limpiar</button>
                        </div>
                    </form>
                </article>
        </section>
        <section class="tablas-seccion"  id="tabla-libro">
            <article class="tablas-contenido">
            <div class="tabla-botones">
                <button id="cargar-tabla-libro">Cargar Tabla</button>
                <button id="vaciar-tabla-libro">Vaciar Tabla</button>
            </div>
                <table class="tabla">
                    <thead class="tabla-cabecera">
                        <tr>
                            <th>TITULO</th>
                            <th>AUTOR</th>
                            <th>GENERO</th>
                            <th>SAGA</th>
                            <th>NIVEL</th>
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