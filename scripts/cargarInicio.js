import { tarjetaLibro } from "./tarjetaLibro.js";

export function cargarInicio() {

    let $tarjeta,
    $contenedor = document.getElementById("tarjeta-container"),
    $body = document.getElementById("body"),
    $main = document.getElementById("main");


    fetch("../../scriptsPHP/cargarInicio.php", {
        method: 'POST',
        // body: datos
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

    $main.appendChild($contenedor);
    $body.appendChild($main);
}
