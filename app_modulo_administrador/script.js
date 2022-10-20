import {navegadorAdmin} from "../scripts/navAdmin.js"
import {header} from "../scripts/headerBuscador.js";
import {footer} from "../scripts/footerGit.js";
import {cargarTabla} from "../scripts/cargarTabla.js";
import {cargarSelect} from "../scripts/cargarSelect.js";

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
$botonAltaUsuario = document.getElementById("alta-usuario"),
$botonBajaUsuario = document.getElementById("baja-usuario"),
$botonModiUsuario = document.getElementById("modificar-usuario"),
$botonAltaLibro = document.getElementById("alta-libro"),
$botonBajaLibro = document.getElementById("baja-libro"),
$botonModiLibro = document.getElementById("modificar-libro");

$body.appendChild($header);
$body.appendChild($footer);
$body.appendChild($navegadorAdmin);

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
    if(confirm("Seguro que quiere enviar el formulario de alta") == true) {
        const datos = new FormData(document.getElementById("formABM-usuario"));
        fetch("../scriptsPHP/guardarArchivo.php", {
            method: 'POST',
            body: datos
        }) 
            .then(res => res.text() )
            .then(json => alert(json))
            .catch(error => console.error('Error: ', error))
    }
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
    altaRegistro("libro")
});

$botonBajaLibro.addEventListener("click", (e)=> {
    e.preventDefault();
    bajaRegistro("libro")
});

$botonModiLibro.addEventListener("click", (e)=> {
    e.preventDefault();
    modificarRegistro("libro")
});
