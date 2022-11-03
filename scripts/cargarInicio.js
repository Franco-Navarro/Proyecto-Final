import { tarjetaLibro } from "./tarjetaLibro.js";

export function cargarInicio() {
    let $tarjeta,
    $contenedor = document.createElement("section"),
    $h1 = document.createElement("h1"),
    datos = new FormData(),
    autorFiltro = document.getElementById("autorFiltro"),
    tituloFiltro = document.getElementById("tituloFiltro"),
    generoFiltro = document.getElementById("generoFiltro"),
    sagaFiltro = document.getElementById("sagaFiltro"),
    gratuitoFiltro = document.getElementById("gratuitoFiltro"),
    inputBuscar = document.getElementById("buscador-input");
    
    if(autorFiltro.checked){
        datos.append("autorFiltro", "autores.nombre");
    }
    if(tituloFiltro.checked){
        datos.append("tituloFiltro","libros.titulo");
    }
    if(generoFiltro.checked){
        datos.append("generoFiltro", "generos.nombre");
    }
    if(sagaFiltro.checked){
        datos.append("sagaFiltro", "libros.saga");
    }
    if(gratuitoFiltro.checked){
        datos.append("gratuitoFiltro", "true");
    }
    else {
        datos.append("gratuitoFiltro", "false");
    }
    datos.append("valor", inputBuscar.value);
    $contenedor.classList.add("inicio-contenido");
    $contenedor.id = "tarjeta-container";
    $h1.classList.add("inicio-contenido-titulo");
    $h1.innerHTML = "Todos los libros";
    $contenedor.appendChild($h1);

    fetch("../../scriptsPHP/cargarInicio.php", {
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(json => {
            for (let i = 0; i < json.length; i++) {
                $tarjeta = tarjetaLibro(json[i]);
                $contenedor.appendChild($tarjeta);
            }
        })
        .catch(error => console.error('Error: ', error))
        .finally(()=> {
        })

    return $contenedor;
}
