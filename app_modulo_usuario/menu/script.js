// ESTA FUNCION ES TEMPORAL Y ABRE LA VENTANA DE DESCRIPCION DEL LIBRO
// document.getElementById("tarjeta-libro").addEventListener("click", ()=> {
//     window.location = "../libroDetalle/";
// })

import { navegador } from "../../scripts/navUser.js";
import { header } from "../../scripts/headerBuscador.js";
import { cargarInicio } from "../../scripts/cargarInicio.js";
import { footer } from "../../scripts/footerGit.js";


let $body = document.getElementById("body"),
    $navegador = navegador(),
    $header = header(),
    $footer = footer();

cargarInicio();

$body.appendChild($header);
$body.appendChild($footer);
$body.appendChild($navegador);