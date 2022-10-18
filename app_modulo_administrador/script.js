import {navegadorAdmin} from "../scripts/navAdmin.js"
import {header} from "../scripts/headerBuscador.js";
import {footer} from "../scripts/footerGit.js";
import {cargarTabla} from "../scripts/cargarTabla.js"


let $body = document.getElementById("body"),
$tablaLibro = document.getElementById("cargar-tabla-libro"),
$tablaUsuario = document.getElementById("cargar-tabla-usuario"),
$vaciarTablaLibro = document.getElementById("vaciar-tabla-libro"),
$vaciarTablaUsuario = document.getElementById("vaciar-tabla-usuario"),
$navegadorAdmin = navegadorAdmin(),
$header = header(),
$footer = footer();

(()=> cargarTabla("usuario"))()


$tablaLibro.addEventListener("click", ()=> {cargarTabla("libro")});
$tablaUsuario.addEventListener("click", ()=>{cargarTabla("usuario")});

$vaciarTablaLibro.addEventListener("click", ()=> {
    let $tabla = document.getElementById("tabla-cuerpo-libro")
    while($tabla.childNodes.length > 0) {
    $tabla.removeChild($tabla.childNodes[0]);
}
});
$vaciarTablaUsuario.addEventListener("click", ()=>{
    let $tabla = document.getElementById("tabla-cuerpo-usuario")
    while($tabla.childNodes.length > 0) {
        $tabla.removeChild($tabla.childNodes[0]);
}});

$body.appendChild($header);
$body.appendChild($footer);
$body.appendChild($navegadorAdmin);
