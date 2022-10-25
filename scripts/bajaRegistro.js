import { verificarInputs } from "./verificarInputs.js";
import { mensajeModal } from "./mensajeModal.js";
import { cargarTabla } from "./cargarTabla.js";

export function bajaRegistro(tipo) {
    if (tipo === "usuario") {
        let $id = document.getElementById("id-usuario"),
            $nombre = document.getElementById("nombre"),
            datos = new FormData();

        if (verificarInputs($id, $nombre)) {
            datos.append("tipo", tipo);
            datos.append("id", $id.value);
            datos.append("nombre", $nombre.value);
            alert("Si elimina un registro los archivos pertenecientes a este seguiran en el servidor")
            if (confirm("Seguro que quiere enviar el formulario de baja") == true) {
                fetch("../scriptsPHP/bajaRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache: "no-cache"
                })
                    .then(res => res.text())
                    .then(json => {
                        if (json == "" || json == " ") {
                            mensajeModal(false, "No se pudo realizar el DELETE en usuarios")
                        }
                        else {
                            mensajeModal(true, json)
                            cargarTabla("usuario");
                            $id.value = ""
                            $nombre.value = ""
                            let $email = document.getElementById("email"),
                                $contrasenia = document.getElementById("contrasenia");
                            $email.value = ""
                            $contrasenia.value = ""
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    })
            }

        }
        else { mensajeModal(false, "Verifique que los inputs esten bien cargados") }

    }
    else if (tipo === "libro") {
        let $id = document.getElementById("id-libro"),
            $titulo = document.getElementById("titulo"),
            datos = new FormData();
        if (verificarInputs($id, $titulo)) {
            datos.append("tipo", tipo);
            datos.append("id", $id.value);
            datos.append("titulo", $titulo.value);
            alert("Si elimina un registro los archivos pertenecientes a este seguiran en el servidor")
            if (confirm("Seguro que quiere enviar el formulario de baja") == true) {
                fetch("../scriptsPHP/bajaRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache: "no-cache"
                })
                    .then(res => res.text())
                    .then(json => {
                        if (json == "" || json == " ") {
                            mensajeModal(false, "No se pudo realizar el DELETE en libros")
                        }
                        else {
                            mensajeModal(true, json)
                            cargarTabla("libro");
                            $id.value = ""
                            $titulo.value = ""
                            let $saga = document.getElementById("saga"),
                                $paginas = document.getElementById("paginas"),
                                $descripcion = document.getElementById("descripcion");
                            $saga.value = ""
                            $paginas.value = ""
                            $descripcion.value = ""
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    })
            }

        }
        else { mensajeModal(false, "Verifique que los inputs esten bien cargados") }
    }
}