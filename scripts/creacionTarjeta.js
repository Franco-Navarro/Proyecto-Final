const $seccion = document.getElementById("tarjeta-container");

function crearTarjeta(json) {
    let portada = json['portada'],
    titulo = json['titulo'].replace(/_/g, " "),
    autor = json['autor'],
    descripcion = json['descripcion'],
    pdf = json['pdf'],
    $tarjeta = document.createElement("article");

    $tarjeta.classList.add("tarjeta-libro");
    $tarjeta.onclick = ()=> abrirLibro(pdf);

    let tarjetaContenido = `<div class="tarjeta-libro-contenedor">
                            <img class="tarjeta-libro-portada" src="${portada}" alt="portada de ejemplo">
                            <div class="tarjeta-libro-contenido">
                                <h4 class="tarjeta-libro-titulo">${titulo.toUpperCase()}</h4>
                                <small class="tarjeta-libro-autor">${autor}</small>
                                <p class="tarjeta-libro-descripcion">${descripcion}</p>
                            </div>
                        </div>`;

    $tarjeta.innerHTML = tarjetaContenido;
    $seccion.appendChild($tarjeta);
}

function abrirLibro(url){
    alert(url)
}