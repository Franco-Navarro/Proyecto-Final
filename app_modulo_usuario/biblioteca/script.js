

import { navegador } from "../../scripts/navUser.js";
import { tarjetaLibro } from "../../scripts/tarjetaLibro.js";
import { footer } from "../../scripts/footerGit.js";


let $body = document.getElementById("body"),
    $main = document.getElementById("main"),
    $contenedor = document.getElementById("tarjeta-container"),
    $navegador = navegador(),
    $footer = footer();


$main.appendChild($contenedor);
$body.appendChild($main);
$body.appendChild($footer);
$body.appendChild($navegador);