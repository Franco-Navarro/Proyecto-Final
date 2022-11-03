export function crearTabla(json, element) {
    if (json[0]["tipo"] === "libro") {
        json.forEach((e) => {
            if (e["titulo"] !== undefined) {
                let $fila = document.createElement("tr"),
                    $id = document.createElement("td"),
                    $titulo = document.createElement("td"),
                    $autor = document.createElement("td"),
                    $genero = document.createElement("td"),
                    $saga = document.createElement("td"),
                    $paginas = document.createElement("td"),
                    $descripcion = document.createElement("td"),
                    $gratuito = document.createElement("td"),
                    $destacado = document.createElement("td");

                $id.innerHTML = e['id'];
                $titulo.innerHTML = e['titulo'];
                $autor.innerHTML = e['autor'];
                $saga.innerHTML = e['saga'];
                $descripcion.innerHTML = e['descripcion'];
                $paginas.innerHTML = e['paginas']
                $genero.innerHTML = e['genero'];
                if(e['gratuito'] == 1) {
                    $gratuito.innerHTML = "Gratuito";
                }
                else {
                    $gratuito.innerHTML = "Pago";
                }
                if(e['destacado'] == 1) {
                    $destacado.innerHTML = "Si";
                }
                else {
                    $destacado.innerHTML = "No";
                }
                

                $fila.appendChild($id)
                $fila.appendChild($titulo)
                $fila.appendChild($autor)
                $fila.appendChild($genero)
                $fila.appendChild($saga)
                $fila.appendChild($paginas)
                $fila.appendChild($descripcion)
                $fila.appendChild($gratuito)
                $fila.appendChild($destacado)

                $fila.addEventListener("dblclick", () => {
                    document.getElementById("id-libro").value = $fila.childNodes[0].innerHTML
                    document.getElementById("titulo").value = $fila.childNodes[1].innerHTML
                    document.getElementById("autor").value = $fila.childNodes[2].innerHTML
                    document.getElementById("genero").value = $fila.childNodes[3].innerHTML
                    document.getElementById("saga").value = $fila.childNodes[4].innerHTML
                    document.getElementById("paginas").value = $fila.childNodes[5].innerHTML
                    document.getElementById("descripcion").value = $fila.childNodes[6].innerHTML
                    document.getElementById("gratuito").value = $fila.childNodes[7].innerHTML
                    document.getElementById("destacado").value = $fila.childNodes[8].innerHTML
                })
                element.appendChild($fila);
            }
        });
    }
    else if (json[0]["tipo"] === "usuario") {
        json.forEach(e => {
            if (e["id"] !== undefined) {
                let $fila = document.createElement("tr"),
                    $id = document.createElement("td"),
                    $nombre = document.createElement("td"),
                    $email = document.createElement("td"),
                    $rol = document.createElement("td"),
                    $contrasenia = document.createElement("td");

                $id.innerHTML = e['id'];
                $nombre.innerHTML = e['nombre'];
                $email.innerHTML = e['email'];
                $rol.innerHTML = e['rol'];
                $contrasenia.innerHTML = e['contrasenia'];

                $fila.addEventListener("dblclick", () => {
                    document.getElementById("id-usuario").value = $fila.childNodes[0].innerHTML
                    document.getElementById("nombre").value = $fila.childNodes[1].innerHTML
                    document.getElementById("email").value = $fila.childNodes[2].innerHTML
                    document.getElementById("roles").value = $fila.childNodes[3].innerHTML
                    document.getElementById("contrasenia").value = $fila.childNodes[4].innerHTML

                })

                $fila.appendChild($id)
                $fila.appendChild($nombre)
                $fila.appendChild($email)
                $fila.appendChild($rol)
                $fila.appendChild($contrasenia)
                element.appendChild($fila);
            }
        });
    }
}