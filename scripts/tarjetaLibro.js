import { detalleLibro } from "./detalleLibro.js";


export function tarjetaLibro(json) {
    let titulo = json['titulo'],
        autor = json['autor'],
        descripcion = json['descripcion'],
        paginas = json['paginas'],
        saga = json['saga'],
        id = json['id'],
        portada = json['portada'].replace(/ /g, "_"),
        pdf = json['pdf'].replace(/ /g, "_"),
        $tarjeta = document.createElement("article");

    $tarjeta.classList.add("tarjeta-libro");
    $tarjeta.onclick = () => {
        let hashTitulo = json['titulo'].replace(/ /g, "_");
        location.hash = hashTitulo.toLowerCase();
        detalleLibro(json);
    }

    let tarjetaContenido = `<div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="${portada.toLowerCase()}" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">${titulo.toUpperCase()}</h4>
                                <small class="tarjeta-libro-autor">${autor}</small>
                                <p class="tarjeta-libro-descripcion">${descripcion}</p>
                            </div>
                        </div>`;

    $tarjeta.innerHTML = tarjetaContenido;

    return $tarjeta;
}