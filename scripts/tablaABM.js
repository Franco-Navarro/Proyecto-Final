export function crearTabla(json, element) {
    if(json[0]["tipo"] === "libro") {
        json.forEach((e) => {
            if(e["titulo"] !== undefined) {
                let $fila = document.createElement("tr"),
                $titulo = document.createElement("td"),
                $autor = document.createElement("td"),
                $genero = document.createElement("td"),
                $saga = document.createElement("td"),
                $paginas = document.createElement("td"),
                $descripcion = document.createElement("td");

                $titulo.innerHTML = e['titulo'];
                $autor.innerHTML = e['autor'];
                $saga.innerHTML = e['saga'];
                $descripcion.innerHTML = e['descripcion'];
                $paginas.innerHTML = e['paginas']
                $genero.innerHTML = e['genero'];

                $fila.appendChild($titulo)
                $fila.appendChild($autor)
                $fila.appendChild($genero)
                $fila.appendChild($saga)
                $fila.appendChild($paginas)
                $fila.appendChild($descripcion)

                $fila.addEventListener("dblclick", ()=> {
                    document.getElementById("titulo").value =  $fila.childNodes[0].innerHTML
                    document.getElementById("autor").value =  $fila.childNodes[1].innerHTML
                    document.getElementById("genero").value =  $fila.childNodes[2].innerHTML
                    document.getElementById("saga").value =  $fila.childNodes[3].innerHTML
                    document.getElementById("paginas").value =  $fila.childNodes[4].innerHTML
                    document.getElementById("descripcion").value =  $fila.childNodes[5].innerHTML
                })
                element.appendChild($fila);
            }
        });
    }
    else if(json[0]["tipo"] === "usuario") {
        json.forEach(e => {
            if(e["id"] !== undefined) {
                let $fila = document.createElement("tr"),
                $id = document.createElement("td"),
                $nombre = document.createElement("td"),
                $email = document.createElement("td"),
                $rol = document.createElement("td");
    
                $id.innerHTML = e['id'];
                $nombre.innerHTML = e['nombre'];
                $email.innerHTML = e['email'];
                $rol.innerHTML = e['rol'];
    
                $fila.addEventListener("dblclick", ()=> {
                    document.getElementById("id").value =  $fila.childNodes[0].innerHTML
                    document.getElementById("nombre").value =  $fila.childNodes[1].innerHTML
                    document.getElementById("email").value =  $fila.childNodes[2].innerHTML
                    document.getElementById("roles").value =  $fila.childNodes[3].innerHTML
                
                })
    
                $fila.appendChild($id)
                $fila.appendChild($nombre)
                $fila.appendChild($email)
                $fila.appendChild($rol)
                element.appendChild($fila);
            }
        });
    }
}