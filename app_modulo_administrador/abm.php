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
        <section class="formABM-seccion" >
                <article class="formABM-contenido">
                    <form action="" class="formABM" enctype="multipart/form-data" id="formABM-usuario">
                        <div class="formABM-titulo">
                            <h2>Nuevo Usuario</h2>
                        </div>
                        <div class="formABM-input">
                            <label for="id">Id</label>
                            <input type="text" id="id" name="id">
                        </div>
                        <div class="formABM-input">
                            <label for="nombre">Nombre de Usuario</label>
                            <input type="text" id="nombre" name="nombre">
                        </div>

                        <div class="formABM-input">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="formABM-input">
                            <label for="roles">Rol</label>
                            <select name="roles" id="roles">
                            </select>
                        </div>
                        <div class="form-archivo">
                            <label for="pdf">Subir Archivo</label>
                            <input type="file" name="pdf" id="pdf">
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
        <section class="tablas-seccion"  id="tabla-user">
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
                            <select name="autor" id="autor"></select>
                        </div>
                        <div class="formABM-input">
                            <label for="genero">Genero</label>
                            <select name="genero" id="genero"></select>
                        </div>
                        <div class="formABM-input">
                            <label for="saga">Saga</label>
                            <input type="text" id="saga" name="saga">
                        </div>
                        <div class="formABM-input">
                            <label for="paginas">Paginas</label>
                            <input type="number" id="paginas" name="paginas">
                        </div>
                        <div class="formABM-textarea">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion"></textarea>
                        </div>
                        <div class="formABM-botones">
                            <input type="submit" value="Alta" id="alta-libro">
                            <input type="submit" value="Modificar" id="modificar-libro">
                            <input type="submit" value="Eliminar" id="baja-libro">
                            <input type="reset" value="Limpiar">

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