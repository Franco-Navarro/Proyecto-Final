import {crearTabla} from "./tablaABM.js"


export function cargarTabla(tipo) {
    const datos = new FormData();
    datos.append("tipo", tipo);

    fetch("../scriptsPHP/selectTablas.php", {
        method: 'POST',
        body: datos
    }) 
        .then(res => res.json() )
        .then(json => {tabla(json)})
        .catch(error => console.error('Error: ', error));

}

function tabla(json) {
    if(json[0]["tipo"] === "libro"){
        let $tabla = document.getElementById("tabla-cuerpo-libro")
        if($tabla.childNodes.length > 0)
        while($tabla.childNodes.length > 0) {
            $tabla.removeChild($tabla.childNodes[0]);
        }
        crearTabla(json, $tabla)
    }
    else if(json[0]["tipo"] === "usuario") {
        let $tabla = document.getElementById("tabla-cuerpo-usuario")
        while($tabla.childNodes.length > 0) {
            $tabla.removeChild($tabla.childNodes[0]);
        }
        crearTabla(json, $tabla)
    }
}