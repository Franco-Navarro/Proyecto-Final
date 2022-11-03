import { navegadorAdmin } from "../scripts/navAdmin.js"
import { footer } from "../scripts/footerGit.js";
import { cargarTabla } from "../scripts/cargarTabla.js";
import { cargarSelect } from "../scripts/cargarSelect.js";
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
    $botonCargaArchivo = document.getElementById("archivos-libro"),
    $botonAltaRol = document.getElementById("insert-rol"),
    $botonAltaAutor = document.getElementById("insert-autor"),
    $botonBuscar = document.getElementById("boton-buscar"),
    $inputBuscar = document.getElementById("buscador-input"),
    $botonAltaGenero = document.getElementById("insert-genero");

cargarSelect($selectAutores, "autores", "nombre");
cargarSelect($selectGeneros, "generos", "nombre");
cargarSelect($selectRoles, "roles", "rol");

window.location.hash = "usuario"

$tablaLibro.addEventListener("click", () => cargarTabla("libro"));

$tablaUsuario.addEventListener("click", () => cargarTabla("usuario"));

$vaciarTablaLibro.addEventListener("click", () => {
    let $tabla = document.getElementById("tabla-cuerpo-libro")
    while ($tabla.childNodes.length > 0) {
        $tabla.removeChild($tabla.childNodes[0]);
    }
});

$vaciarTablaUsuario.addEventListener("click", () => {
    let $tabla = document.getElementById("tabla-cuerpo-usuario")
    while ($tabla.childNodes.length > 0) {
        $tabla.removeChild($tabla.childNodes[0]);
    }
});

$botonAltaUsuario.addEventListener("click", (e) => {
    e.preventDefault();
    altaRegistro("usuario");
});

$botonBajaUsuario.addEventListener("click", (e) => {
    e.preventDefault();
    bajaRegistro("usuario")
});

$botonModiUsuario.addEventListener("click", (e) => {
    e.preventDefault();
    modificarRegistro("usuario")
});

$botonAltaLibro.addEventListener("click", (e) => {
    e.preventDefault();
    altaRegistro("libro");
});

$botonBajaLibro.addEventListener("click", (e) => {
    e.preventDefault();
    bajaRegistro("libro")
});

$botonModiLibro.addEventListener("click", (e) => {
    e.preventDefault();
    modificarRegistro("libro")
});

$botonCargaArchivo.addEventListener("click", (e) => {
    e.preventDefault();
    cargarSelect($selectTitulos, "libros", "titulo");

    let $seccionArchivo = document.getElementById("formABM-seccion-archivo"),
        $botonAltaArchivo = document.getElementById("cargar-archivo");

    $seccionArchivo.classList.toggle("none");
    $botonAltaArchivo.onclick = (e) => {
        e.preventDefault()
        cargarArchivo();
    }
})

$botonAltaAutor.addEventListener("click", (e) => {
    e.preventDefault();
    modalForm("autor");
})

$botonAltaRol.addEventListener("click", (e) => {
    e.preventDefault();
    modalForm("rol");
})

$botonAltaGenero.addEventListener("click", (e) => {
    e.preventDefault();
    modalForm("genero");
})


$botonBuscar.addEventListener("click", (e) => {
    e.preventDefault()
    if (window.location.hash == "#usuario") {
        cargarTabla("usuario")
    }
    else if (window.location.hash == "#libro") {
        cargarTabla("libro")
    }
})

$inputBuscar.addEventListener("keyup", () => {
    if (window.location.hash == "#usuario") {
        cargarTabla("usuario")

    }
    else if (window.location.hash == "#libro") {
        cargarTabla("libro")
    }
})

cargarTabla("usuario");
cargarTabla("libro");
$body.appendChild($footer);
$body.appendChild($navegadorAdmin);


function modalForm(tipo) {
    let $body = document.getElementById("body"),
        $contenedor = document.createElement("div"),
        $contenedorBotones = document.createElement("div"),
        $form = document.createElement("form"),
        $nombre = document.createElement("input"),
        $enviar = document.createElement("button"),
        $cerrar = document.createElement("button"),
        $titulo = document.createElement("h4");

    $contenedor.classList.add("contenedorModal");
    $form.classList.add("contenedorModalForm");
    $contenedorBotones.classList.add("contenedorModalBotones");

    $titulo.innerHTML = `AGREGAR ${tipo.toUpperCase()}`;
    $enviar.innerHTML = "enviar";
    $cerrar.innerHTML = "salir";
    $nombre.id = "contenedor-input-valor";
    $contenedor.id = "modal-contenedor";

    $enviar.onclick = (e) => {
        e.preventDefault()
        altaRegistro(tipo);
    }
    $cerrar.onclick = (e) => {
        e.preventDefault()
        let $modalAEliminar = document.getElementById("modal-contenedor");
        $body.removeChild($modalAEliminar);
    }

    $contenedorBotones.appendChild($enviar)
    $contenedorBotones.appendChild($cerrar)
    $form.appendChild($titulo);
    $form.appendChild($nombre);
    $form.appendChild($contenedorBotones);
    $contenedor.appendChild($form);
    $body.appendChild($contenedor);

}