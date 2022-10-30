// ESTA FUNCION ES TEMPORAL Y ABRE LA VENTANA DE DESCRIPCION DEL LIBRO
// document.getElementById("tarjeta-libro").addEventListener("click", ()=> {
//     window.location = "../libroDetalle/";
// })

import { navegador } from "../../scripts/navUser.js";
import { cargarInicio } from "../../scripts/cargarInicio.js";
import { footer } from "../../scripts/footerGit.js";
import { cargarLeyendo } from "../../scripts/cargarLeyendo.js";


let $body = document.getElementById("body"),
    $main = document.getElementById("main"),
    $navegador = navegador(),
    $contendor = cargarInicio(),
    $contenedorLeyendo = cargarLeyendo(),
    $footer = footer(),
    $botonFiltro = document.getElementById("boton-filtro"),
    $botonBarra = document.getElementById("buscador-buscar");


    $botonFiltro.addEventListener("click",() => document.getElementById("buscador-filtro").classList.toggle("header-buscador-filtro-abierto"));

    $botonBarra.addEventListener("click",() => {
        let $contenedor = cargarInicio();
        while ($main.childNodes.length > 0) {
            $main.removeChild($main.childNodes[0]);
        }
        $main.appendChild($contenedor);
    });


$main.appendChild($contenedorLeyendo);
$main.appendChild($contendor);
$body.appendChild($main);
$body.appendChild($footer);
$body.appendChild($navegador);

