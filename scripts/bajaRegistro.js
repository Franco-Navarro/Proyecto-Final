import {verificarInputs} from "./verificarInputs.js";

export function bajaRegistro(tipo) {
    if(tipo === "usuario") {
        let $id = document.getElementById("id-usuario").value, 
        $nombre= document.getElementById("nombre").value,
        datos = new FormData();

       if(verificarInputs()) {
        datos.append("tipo",tipo);
        datos.append("id",$id);
        datos.append("nombre",$nombre);
            if(confirm("Seguro que quiere enviar el formulario de baja") == true) {
                alert("Si elimina un registro los archivos pertenecientes a este seguiran en el servidor")
                if(confirm("Seguro que quiere eliminarlo")) {
                fetch("../scriptsPHP/bajaRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache:"no-cache"
                }) 
                    .then(res => res.text() )
                    .then(json => alert(json))
                    .catch(error => console.error('Error: ', error))
                }
            }
       }
    }
    else if(tipo === "libro") {
        let $id = document.getElementById("id-libro").value, 
        $titulo= document.getElementById("titulo").value,
        datos = new FormData();
       if(verificarInputs()) {
        datos.append("tipo",tipo);
        datos.append("id",$id);
        datos.append("titulo",$titulo);
        if(confirm("Seguro que quiere enviar el formulario de baja") == true) {
            alert("Si elimina un registro los archivos pertenecientes a este seguiran en el servidor")
            if(confirm("Seguro que quiere eliminarlo")) {
                fetch("../scriptsPHP/bajaRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache:"no-cache"
                }) 
                    .then(res => res.text() )
                    .then(json => alert(json))
                    .catch(error => console.error('Error: ', error))
            }
        }
       }
    }
    console.log(tipo)
}