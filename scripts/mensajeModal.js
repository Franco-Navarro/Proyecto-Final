export function mensajeModal(estado, mensaje, detalle = undefined) {
    let $body = document.getElementById("body"),
    $section = document.createElement("section"),
    $article = document.createElement("article"),
    $estadoContenedor = document.createElement("div"),
    $mensajeContenedor = document.createElement("div"),
    $botonContenedor = document.createElement("div"),
    $boton = document.createElement("button"),
    $mensaje = document.createElement("h4");


    $section.classList.add("mensaje-seccion");
    $section.id = "seccion-mensaje";
    $article.classList.add("mensaje-contenido");
    $estadoContenedor.classList.add("mensaje-estado");
    $mensajeContenedor.classList.add("mensaje-detalle");
    $botonContenedor.classList.add("mensaje-boton");

    $mensaje.innerText = mensaje;
    $boton.innerHTML = "Cerrar";
    $boton.onclick = ()=> {
        $mensajeAEliminar = document.getElementById("seccion-mensaje");
        $body.removeChild($mensajeAEliminar);
    }
    $botonContenedor.appendChild($boton);

    if(estado === true) {
        const $mensajeEstado = document.createElement("div");
        $mensajeEstado.classList.add("mensaje-estado-ok");
        $mensajeEstado.innerHTML = '<svg width="20" height="16" viewBox="0 0 18 14" xmlns="http://www.w3.org/2000/svg"><path d="M0 6L2.4 3.6L7.2 8.4L15.6 0L18 2.4L7.2 13.2L0 6Z" /></svg>';
        $estadoContenedor.appendChild($mensajeEstado);
        $estadoContenedor.appendChild($mensaje);
    }
    else {
        const $mensajeEstado = document.createElement("div");
        $mensajeEstado.classList.add("mensaje-estado-mal");
        $mensajeEstado.innerHTML = '<svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M0 2.66667L2.66667 0L8 5.33333L13.3333 0L16 2.66667L10.6667 8L16 13.3333L13.3333 16L8 10.6667L2.66667 16L0 13.3333L5.33333 8L0 2.66667Z" /></svg>';
        $estadoContenedor.appendChild($mensajeEstado);
        $estadoContenedor.appendChild($mensaje);
    }

    if(detalle != undefined) {
        const $mensajeDetalle = document.createElement("div"),
        $detalle = document.createElement("p");
        $detalle.innerText = detalle;
        $mensajeDetalle.appendChild($detalle);
        $mensajeDetalle.classList.add("mensaje-detalle");
        $mensajeContenedor.appendChild($mensajeDetalle);
    }
    else {
        const $mensajeDetalle = document.createElement("div");
        $mensajeDetalle.innerHTML = " ";
        $mensajeContenedor.appendChild($mensajeDetalle);
    }

    $article.appendChild($estadoContenedor);
    $article.appendChild($mensajeContenedor);
    $article.appendChild($botonContenedor);
    $section.appendChild($article);
    $body.appendChild($section);
}