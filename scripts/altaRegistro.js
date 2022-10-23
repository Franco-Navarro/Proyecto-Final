import {verificarInputs} from "./verificarInputs.js";
import {mensajeModal} from "./mensajeModal.js";
import {cargarTabla} from "./cargarTabla.js";


export function altaRegistro(tipo) {
    if(tipo === "usuario") {
        let $nombre= document.getElementById("nombre"),
        $email= document.getElementById("email"),
        $rol= document.getElementById("roles"),
        $contrasenia= document.getElementById("contrasenia"),
        datos = new FormData();

        if(verificarInputs($nombre,$email,$contrasenia)) {
            datos.append("tipo",tipo);
            datos.append("nombre",$nombre.value);
            datos.append("email",$email.value);
            datos.append("rol",$rol.options["selectedIndex"] + 1);
            datos.append("contrasenia",$contrasenia.value);
            if(confirm("Seguro que quiere enviar el formulario de alta") == true) {
                fetch("../scriptsPHP/altaRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache:"no-cache"
                }) 
                .then(res =>  res.text())
                .then(json => {
                    if(json == "" || json == " ") {
                        mensajeModal(false, "No se pudo realizar el INSERT en usuarios")
                    }
                    else {
                        mensajeModal(true, json)
                        cargarTabla("usuario");
                        let $id = document.getElementById("id-usuario"); 
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
       else {mensajeModal(false, "Verifique que los inputs esten bien cargados")}

    }
    else if(tipo === "libro") {
        let $titulo= document.getElementById("titulo"),
        $autor= document.getElementById("autor"),
        $genero= document.getElementById("genero"),
        $saga= document.getElementById("saga"),
        $paginas= document.getElementById("paginas"),
        $descripcion= document.getElementById("descripcion"),
        datos = new FormData();

        if(verificarInputs($titulo,$saga,$paginas,$descripcion)) {
            datos.append("tipo",tipo);
            datos.append("titulo",$titulo.value);
            datos.append("autor",$autor.options["selectedIndex"] + 1);
            datos.append("genero",$genero.options["selectedIndex"] + 1);
            datos.append("saga",$saga.value);
            datos.append("paginas",$paginas.value);
            datos.append("descripcion",$descripcion.value);
            if(confirm("Seguro que quiere enviar el formulario de alta") == true) {
                fetch("../scriptsPHP/altaRegistro.php", {
                    method: 'POST',
                    body: datos,
                    cache:"no-cache"
                }) 
                    .then(res =>  res.text())
                    .then(json => {
                        if(json == "" || json == " ") {
                            mensajeModal(false, "No se pudo realizar el INSERT en libros")
                        }
                        else {
                            mensajeModal(true, json)
                            cargarTabla("libro");
                            let $id = document.getElementById("id-libro");
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
       else {mensajeModal(false, "Verifique que los inputs esten bien cargados")}

    }
}