import {navegadorAdmin} from "../scripts/navAdmin.js"
import {header} from "../scripts/headerBuscador.js";
import {footer} from "../scripts/footerGit.js";
import {cargarTabla} from "../scripts/cargarTabla.js";
import {cargarSelect} from "../scripts/cargarSelect.js";
import { altaRegistro } from "../scripts/altaRegistro.js";
import { cargarArchivo } from "../scripts/cargarArchivo.js";
import { bajaRegistro } from "../scripts/bajaRegistro.js";
import { modificarRegistro } from "../scripts/modificarRegistro.js";

let $body = document.getElementById("body"),
$tablaLibro = document.getElementById("cargar-tabla-libro"),
$tablaUsuario = document.getElementById("cargar-tabla-usuario"),
$vaciarTablaLibro = document.getElementById("vaciar-tabla-libro"),
$vaciarTablaUsuario = document.getElementById("vaciar-tabla-usuario"),
$navegadorAdmin = navegadorAdmin(),
$header = header(),
$footer = footer(),
$selectRoles = document.getElementById("roles"),
$selectAutores = document.getElementById("autor"),
$selectGeneros = document.getElementById("genero"),
$selectTitulos = document.getElementById("titulo-select"),
$botonAltaUsuario = document.getElementById("alta-usuario"),
$botonBajaUsuario = document.getElementById("baja-usuario"),
$botonModiUsuario = document.getElementById("modificar-usuario"),
$botonAltaLibro = document.getElementById("alta-libro"),
$botonBajaLibro = document.getElementById("baja-libro"),
$botonModiLibro = document.getElementById("modificar-libro"),
$botonCargaArchivo = document.getElementById("archivos-libro");

cargarSelect($selectTitulos, "libros", "titulo");
cargarSelect($selectAutores, "autores", "nombre");
cargarSelect($selectGeneros,"generos", "nombre");
cargarSelect($selectRoles,"roles", "rol");

$tablaLibro.addEventListener("click", ()=> {
    cargarTabla("libro")
});

$tablaUsuario.addEventListener("click", ()=>{
    cargarTabla("usuario")
});

setTimeout(() => {
    cargarTabla("usuario");
    cargarTabla("libro");   
}, 2000);

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
    }
});

$botonAltaUsuario.addEventListener("click", (e)=> {
    e.preventDefault();
    altaRegistro("usuario");
});

$botonBajaUsuario.addEventListener("click", (e)=> {
    e.preventDefault();
    bajaRegistro("usuario")
});

$botonModiUsuario.addEventListener("click", (e)=> {
    e.preventDefault();
    modificarRegistro("usuario")
});

$botonAltaLibro.addEventListener("click", (e)=> {
    e.preventDefault();
    altaRegistro("libro");
});

$botonBajaLibro.addEventListener("click", (e)=> {
    e.preventDefault();
    bajaRegistro("libro")
});

$botonModiLibro.addEventListener("click", (e)=> {
    e.preventDefault();
    modificarRegistro("libro")
});

$botonCargaArchivo.addEventListener("click", (e)=> {
    e.preventDefault();
    let $seccionArchivo = document.getElementById("formABM-seccion-archivo"),
    $botonAltaArchivo = document.getElementById("cargar-archivo");

    $seccionArchivo.classList.toggle("none");
    $botonAltaArchivo.onclick = (e)=> {
        e.preventDefault()
        cargarArchivo();
    } 
})

$body.appendChild($header);
$body.appendChild($footer);
$body.appendChild($navegadorAdmin);