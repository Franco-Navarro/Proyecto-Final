import { tarjetaLibro } from "./tarjetaLibro.js";

export function cargarFavoritos() {
    let $tarjeta,
        $contenedor = document.createElement("section"),
        $h1 = document.createElement("h1"),
        datos = new FormData(),
        autorFiltro = document.getElementById("autorFiltro"),
        tituloFiltro = document.getElementById("tituloFiltro"),
        generoFiltro = document.getElementById("generoFiltro"),
        sagaFiltro = document.getElementById("sagaFiltro"),
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
        datos.append("valor", inputBuscar.value);


    $contenedor.classList.add("biblioteca-detalle");
    $contenedor.id = "tarjeta-container";
    $h1.classList.add("seccion-biblioteca-titulo");
    

    fetch("../../scriptsPHP/selectFavoritos.php", {
        method: 'POST',
        body: datos

    })
        .then(res => res.json())
        .then(json => {
            if(json.libros.length > 0) {
                $h1.innerHTML = "Tus Favoritos";
                $contenedor.appendChild($h1);
                for (let i = 0; i < json.libros.length; i++) {
                    $tarjeta = tarjetaLibro(json.libros[i]);
                    $contenedor.appendChild($tarjeta);
                }
            }
            else {
                $h1.innerHTML = "No tienes favoritos agregados";
                $contenedor.appendChild($h1);
            }
        })
        .catch(error => console.error('Error: ', error))
        .finally(()=> {
        })
        

    return $contenedor;

}
