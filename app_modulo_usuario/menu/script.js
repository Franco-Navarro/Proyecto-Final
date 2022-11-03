
import { navegador } from "../../scripts/navUser.js";
import { cargarInicio } from "../../scripts/cargarInicio.js";
import { cargarDestacado } from "../../scripts/cargarDestacado.js";
import { footer } from "../../scripts/footerGit.js";
import { cargarLeyendo } from "../../scripts/cargarLeyendo.js";


let $body = document.getElementById("body"),
    $main = document.getElementById("main"),
    $navegador = navegador(),
    $contenedor = cargarInicio(),
    $contenedorDestacado = cargarDestacado(),
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
$main.appendChild($contenedorDestacado);
$main.appendChild($contenedor);
$body.appendChild($main);
$body.appendChild($footer);
$body.appendChild($navegador);

