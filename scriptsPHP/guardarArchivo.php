<?php

    //chdir("/../assets/pdf");
    echo "El directorio actual es: [".getcwd()."]<br />";

    if( empty($_FILES['pdf']['name']) == false )
    {
         if (is_uploaded_file($_FILES['pdf']['tmp_name']))
        {
             if( move_uploaded_file($_FILES['pdf']['tmp_name'], $_FILES['pdf']['name']) == false )
                echo "No se ha podido el mover el archivo.";
            else
                echo "Archivo [".$_FILES['pdf']['name']."] subido y movido al directorio actual.";
        }
        else
        {
           echo "Posible ataque al subir el archivo [".$_FILES['pdf']['nombre_tmp']."]";
        }
    }
    else
    {
        echo "No se seleccionó ningún archivo.";
    }
?>