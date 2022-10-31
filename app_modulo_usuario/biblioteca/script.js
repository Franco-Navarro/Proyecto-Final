

import { navegador } from "../../scripts/navUser.js";
import { cargarFavoritos } from "../../scripts/cargarFavoritos.js";
import { footer } from "../../scripts/footerGit.js";


let $body = document.getElementById("body"),
    $main = document.getElementById("main"),
    $contenedor = cargarFavoritos(),
    $navegador = navegador(),
    $footer = footer(),
    $botonFiltro = document.getElementById("boton-filtro"),
    $botonBarra = document.getElementById("buscador-buscar");


    $botonFiltro.addEventListener("click",() => document.getElementById("buscador-filtro").classList.toggle("header-buscador-filtro-abierto"));

    $botonBarra.addEventListener("click",() => {
        let $contenedor = cargarFavoritos();
        while ($main.childNodes.length > 0) {
            $main.removeChild($main.childNodes[0]);
        }
        $main.appendChild($contenedor);
    });

$main.appendChild($contenedor);
$body.appendChild($main);
$body.appendChild($footer);
$body.appendChild($navegador);