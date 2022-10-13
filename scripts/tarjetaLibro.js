import {detalleLibro} from "./detalleLibro.js";


export function tarjetaLibro(json) {
    let portada = json['portada'],
    titulo = json['titulo'].replace(/_/g, " "),
    autor = json['autor'],
    descripcion = json['descripcion'],
    $tarjeta = document.createElement("article");

    $tarjeta.classList.add("tarjeta-libro");
    $tarjeta.onclick = ()=> {
        location.hash = json['titulo'];
        detalleLibro(json);
    } 

    let tarjetaContenido = `<div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="${portada}" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">${titulo.toUpperCase()}</h4>
                                <small class="tarjeta-libro-autor">${autor}</small>
                                <p class="tarjeta-libro-descripcion">${descripcion}</p>
                            </div>
                        </div>`;

    $tarjeta.innerHTML = tarjetaContenido;

    return $tarjeta;
}