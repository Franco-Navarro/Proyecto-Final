<?php
    include("../../scriptsPHP/manejoSesion.inc");
    $_SESSION["rol"];

?>

    <!DOCTYPE html>
    <html lang="es">
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/menu.css">
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
                <section class="inicio-contenido" id="tarjeta-container">
                    <h1 class="inicio-contenido-titulo">Continuar leyendo</h1>
                </section>
        </main>

        <script type="module" src="script.js">const rol = <?php echo $_SESSION["rol"] ?>;</script>
        
    </body>
    
    </html>