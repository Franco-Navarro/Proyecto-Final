import { tarjetaLibro } from "./tarjetaLibro.js";

export function cargarLeyendo() {
    let $tarjeta,
        $contenedor = document.createElement("section"),
        $h1 = document.createElement("h1");

    $contenedor.classList.add("inicio-contenido");
    $contenedor.id = "tarjeta-container";
    $h1.classList.add("inicio-contenido-titulo");
    $h1.innerHTML = "Continuar Leyendo";

    fetch("../../scriptsPHP/selectLeyendo.php", {
        method: 'GET',
    })
        .then(res => res.json())
        .then(json => {
            if(json.libros.length > 0){
                $contenedor.appendChild($h1);
                for (let i = 0; i < json.libros.length; i++) {
                    $tarjeta = tarjetaLibro(json.libros[i]);
                    $contenedor.appendChild($tarjeta);
                    
                }
            }
        })
        .catch(error => console.error('Error: ', error))
        .finally(() => {
        })

    return $contenedor;

}
