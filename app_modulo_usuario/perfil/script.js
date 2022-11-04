
const $perfil = document.getElementById("seccion-perfil"),
    $comentario = document.getElementById("seccion-comentario"),
    $seccionTarjeta = document.getElementById("seccion-tarjeta"),
    $seccionSuscripcion = document.getElementById("seccion-suscripcion"),
    $botonVolver = document.getElementById("registro-salir"),
    $numero = document.getElementById("numero-tarjeta"),
    $nombre = document.getElementById("nombre-tarjeta"),
    $fecha = document.getElementById("fecha-tarjeta"),
    $codigo = document.getElementById("codigo-tarjeta"),
    $dni = document.getElementById("dni-tarjeta"),
    $tarjetaNumero = document.getElementById("mostrar-numeros"),
    $tarjetaNombre = document.getElementById("mostrar-nombre"),
    $tarjetaFecha = document.getElementById("mostrar-fecha"),
    datosTarjeta = { numero: null, nombre: null, fecha: null, codigo: null, dni: null },
    $botonEnviarMail = document.getElementById("enviar-mail"),
    $botonCambiarTema = document.getElementById("cambiar-tema");

let $datos;

fetch("../../scriptsPHP/datosUsuario.php", {
    method: 'GET'
})
    .then(res => res.json())
    .then(json => {
        $datos = json;
    })
    .catch(error => console.error('Error: ', error))

document.getElementById("comentario").addEventListener("click", (e) => {
    e.preventDefault();
    $perfil.classList.add("none");
    $comentario.classList.remove("none");
})

document.getElementById("seccion-comentario-volver").addEventListener("click", (e) => {
    e.preventDefault();
    $perfil.classList.remove("none");
    $comentario.classList.add("none");
})

$botonVolver.onclick = (e) => {
    e.preventDefault();
    $botonVolver.classList.add("none");
    $comentario.classList.add("none");
    $seccionSuscripcion.classList.add("none");
    $seccionTarjeta.classList.add("none");
    $perfil.classList.remove("none");
}

document.getElementById("suscripcion-gratuita").addEventListener("click", () => {
    //datosRegistro.tipoSuscripcion = 1;
    registrarUsuario(datosRegistro);
})

document.getElementById("suscripcion-premium").addEventListener("click", () => {
    //datosRegistro.tipoSuscripcion = 2;
    $seccionTarjeta.classList.toggle("none");
    $seccionSuscripcion.classList.toggle("none");
})

// CARGA LOS DATOS DEL FORM REGISTRO AL OBJETO DATOSREGISTRO
document.getElementById("tarjeta-boton").addEventListener("click", (e) => {
    e.preventDefault();

    if (verificarDatos($nombre, $numero, $fecha, $codigo, $dni)) {
        // LA EXPRESION / /g ELIMINA LOS ESPACIOS EN BLANCO 
        datosTarjeta.numero = $numero.value.replace(/ /g, "");
        datosTarjeta.nombre = $nombre.value;
        datosTarjeta.fecha = $fecha.value.replace(/ /g, "");
        datosTarjeta.codigo = $codigo.value.replace(/ /g, "");
        datosTarjeta.dni = $dni.value.replace(/ /g, "");

        registrarTarjeta(datosTarjeta);

    }
    else {
        alert("Complete todos los campos");
    }
})

function registrarTarjeta(datosTarjeta) {
    const datos = new FormData();
    datos.append("numero", datosTarjeta.numero);
    datos.append("nombre", datosTarjeta.nombre);
    datos.append("fecha", datosTarjeta.fecha);
    datos.append("codigo", datosTarjeta.codigo);
    datos.append("dni", datosTarjeta.dni);

    datos.append("usuario", datosRegistro.usuario);
    datos.append("contraseña", datosRegistro.contraseña);
    datos.append("email", datosRegistro.email);
    datos.append("tipoSuscripcion", datosRegistro.tipoSuscripcion);

    fetch("../scriptsPHP/registrar.php", {
        method: 'POST',
        body: datos
    })
        .then(res => res.text())
        .then(json => alert(json))
        .catch(error => console.error('Error: ', error))
    /*.finally(()=> {
        $modalRegs.classList.add("none");
        $modalLogin.classList.remove("none");
    })*/
}

// MUESTREO DE DATOS DE TARJETA INGRESADOS
$numero.addEventListener("keyup", () => {
    if ($numero.value == "") {
        $tarjetaNumero.innerText = "**** **** **** ****"
    }
    else if ($numero.value.length <= $numero.max) {
        if ($numero.value.length === 4) {
            $numero.value = $numero.value + " ";

        }

        if ($numero.value.length === 9) {
            $numero.value = $numero.value + " ";
        }

        if ($numero.value.length === 14) {
            $numero.value = $numero.value + " ";
        }
        $tarjetaNumero.innerText = $numero.value;
    }
    else {
        $numero.value = $tarjetaNumero.innerText;
    }
})

$nombre.addEventListener("keyup", () => {
    if ($nombre.value == "") {
        $tarjetaNombre.innerText = "Nombre y Apellido"
    }
    else if ($nombre.value.length <= $nombre.max) {
        $tarjetaNombre.innerText = $nombre.value.toUpperCase();
    }
    else {
        $nombre.value = $tarjetaNombre.innerText;
    }
})

$fecha.addEventListener("keyup", () => {
    if ($fecha.value == "") {
        $tarjetaFecha.innerText = "MM/AA"
    }
    else if ($fecha.value.length <= $fecha.max) {
        if ($fecha.value.length === 2) {
            $fecha.value = $fecha.value + "/";

        }

        $tarjetaFecha.innerText = $fecha.value;
    }
    else {
        $fecha.value = $tarjetaFecha.innerText;
    }
})

$botonCambiarTema.addEventListener("click", (e) => {
    e.preventDefault()
    if ($datos["rol"] != 2) {
        fetch("../../scriptsPHP/cambiarTema.php", {
            method: 'POST'
        })
            .then(res => res.text())
            .then(json => {
                $body = document.getElementById("body");
                console.log(json)
                if (json == 1) {
                    $body.classList.add("dark");
                }
                else {
                    $body.classList.remove("dark");
                }

            })
            .catch(error => console.error('Error: ', error))
            .finally(() => {
            })
    }
})

import { navegador } from "../../scripts/navUser.js";
import { footer } from "../../scripts/footerGit.js";
import { enviarMail } from "../../scripts/enviarMail.js";

let $body = document.getElementById("body"),
    $main = document.getElementById("main"),
    $navegador = navegador(),
    $footer = footer();

$body.appendChild($main)
$body.appendChild($footer);
$body.appendChild($navegador);


$botonEnviarMail.addEventListener("click", (e) => {
    e.preventDefault()
    let nombre = document.getElementById("comentario-nombre").value,
        email = document.getElementById("comentario-email").value,
        comentario = document.getElementById("comentario-comentario").value;

    enviarMail(nombre, email, comentario);
})

