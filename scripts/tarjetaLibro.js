import { detalleLibro } from "./detalleLibro.js";

let $datos;
fetch("../../scriptsPHP/datosUsuario.php", {
    method: 'GET'
})
    .then(res => res.json())
    .then(json => {
        $datos = json;
    })
    .catch(error => console.error('Error: ', error))

export function tarjetaLibro(json) {
    let titulo = json['titulo'],
        autor = json['autor'],
        descripcion = json['descripcion'],
        paginas = json['paginas'],
        saga = json['saga'],
        id = json['id'],
        gratuito = json['gratuito'],
        portada = json['portada'].replace(/ /g, "_"),
        pdf = json['pdf'].replace(/ /g, "_"),
        $tarjeta = document.createElement("article");

    $tarjeta.classList.add("tarjeta-libro");
    $tarjeta.onclick = () => {
        if($datos['rol'] != 2) {
            let hashTitulo = json['titulo'].replace(/ /g, "_");
            location.hash = hashTitulo.toLowerCase();
            detalleLibro(json);
        }
        else if ($datos['rol'] == 2 ){
            if(gratuito == 1) {
                let hashTitulo = json['titulo'].replace(/ /g, "_");
                location.hash = hashTitulo.toLowerCase();
                detalleLibro(json);
            }
        }
    }
    if(gratuito == 0 && $datos['rol'] == 2){
        $tarjeta.classList.add("tarjeta-libro-gris");
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