

import { navegador } from "../../scripts/navUser.js";
import { cargarFavoritos } from "../../scripts/cargarFavoritos.js";
import { footer } from "../../scripts/footerGit.js";


let $body = document.getElementById("body"),
    $main = document.getElementById("main"),
    $contenedor = cargarFavoritos(),
    $navegador = navegador(),
    $footer = footer();




$main.appendChild($contenedor);
$body.appendChild($main);
$body.appendChild($footer);
$body.appendChild($navegador);