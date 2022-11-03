import { verificarInputs } from "./verificarInputs.js";
import { cargarTabla } from "./cargarTabla.js";
import { mensajeModal } from "./mensajeModal.js";

export function modificarRegistro(tipo) {
    if (tipo === "usuario") {
        let $id = document.getElementById("id-usuario"),
            $nombre = document.getElementById("nombre"),
            $email = document.getElementById("email"),
            $rol = document.getElementById("roles"),
            $contrasenia = document.getElementById("contrasenia"),
            datos = new FormData();

        if (verificarInputs($id, $nombre, $email, $contrasenia)) {
            datos.append("tipo", tipo);
            datos.append("id", $id.value);
            datos.append("nombre", $nombre.value);
            datos.append("email", $email.value);
            datos.append("rol", $rol.value);
            datos.append("contrasenia", $contrasenia.value);
            if (confirm("Seguro que quiere enviar el formulario de modificacion") == true) {
                fetch("../scriptsPHP/modificarRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache: "no-cache"
                })
                    .then(res => res.text())
                    .then(json => {
                        if (json == "" || json == " ") {
                            mensajeModal(false, "No se pudo realizar el UPDATE en usuarios")
                        }
                        else {
                            mensajeModal(true, json)
                            cargarTabla("usuario");
                            $id.value = ""
                            $nombre.value = ""
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
            $autor = document.getElementById("autor"),
            $genero = document.getElementById("genero"),
            $saga = document.getElementById("saga"),
            $paginas = document.getElementById("paginas"),
            $descripcion = document.getElementById("descripcion"),
            $gratuito = document.getElementById("gratuito"),
            $destacado = document.getElementById("destacado"),
            datos = new FormData();

        if (verificarInputs($id, $titulo, $saga, $paginas, $descripcion)) {
            datos.append("tipo", tipo);
            datos.append("id", $id.value);
            datos.append("titulo", $titulo.value);
            datos.append("autor", $autor.value);
            datos.append("genero", $genero.value);
            datos.append("saga", $saga.value);
            datos.append("paginas", $paginas.value);
            datos.append("descripcion", $descripcion.value);
            datos.append("gratuito", $gratuito.value);
            datos.append("destacado", $destacado.value);
            
            if (confirm("Seguro que quiere enviar el formulario de modificacion") == true) {
                fetch("../scriptsPHP/modificarRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache: "no-cache"
                })
                    .then(res => res.text())
                    .then(json => {
                        if (json == "" || json == " ") {
                            mensajeModal(false, "No se pudo realizar el UPDATE en libros")
                        }
                        else {
                            mensajeModal(true, json)
                            cargarTabla("libro");
                            $id.value = ""
                            $titulo.value = ""
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