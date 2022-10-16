export function crearTabla(json, element) {
    

    if(json.tipo === "libro") {
        json.array.forEach(e => {
            let $fila = document.createElement("tr"),
            $titulo = document.createElement("td"),
            $autor = document.createElement("td"),
            $genero = document.createElement("td"),
            $saga = document.createElement("td"),
            $nivel = document.createElement("td"),
            $descripcion = document.createElement("td");

            $titulo.innerHTML = e['titulo'];
            $autor.innerHTML = e['autor'];
            $genero.innerHTML = e['genero'];
            $saga.innerHTML = e['saga'];
            $nivel.innerHTML = e['nivel'];
            $descripcion.innerHTML = e['descripcion'];

            $fila.appendChild($titulo)
            $fila.appendChild($autor)
            $fila.appendChild($genero)
            $fila.appendChild($saga)
            $fila.appendChild($nivel)
            $fila.appendChild($descripcion)

            $fila.addEventListener("dblclick", ()=> {
                document.getElementById("titulo").value =  $fila.childNodes[0].innerHTML
                document.getElementById("autor").value =  $fila.childNodes[1].innerHTML
                document.getElementById("genero").value =  $fila.childNodes[2].innerHTML
                document.getElementById("saga").value =  $fila.childNodes[3].innerHTML
                document.getElementById("nivelAcceso").value =  $fila.childNodes[4].innerHTML
                document.getElementById("descripcion").value =  $fila.childNodes[5].innerHTML
            })
            
            //$fila.addEventListener("dblclick", ()=> cargarForm());
            element.appendChild($fila);
        });
    }
    else if(json.tipo === "user") {
        json.array.forEach(e => {
            let $fila = document.createElement("tr"),
            $usuario = document.createElement("td"),
            $contraseña = document.createElement("td"),
            $email = document.createElement("td"),
            $nivel = document.createElement("td");

            $usuario.innerHTML = e['usuario'];
            $contraseña.innerHTML = e['contraseña'];
            $email.innerHTML = e['email'];
            $nivel.innerHTML = e['nivel'];

            $fila.addEventListener("dblclick", ()=> {
                document.getElementById("usuario").value =  $fila.childNodes[0].innerHTML
                document.getElementById("contraseña").value =  $fila.childNodes[1].innerHTML
                document.getElementById("email").value =  $fila.childNodes[2].innerHTML
                document.getElementById("nivelUsuario").value =  $fila.childNodes[3].innerHTML
            })

            $fila.appendChild($usuario)
            $fila.appendChild($contraseña)
            $fila.appendChild($email)
            $fila.appendChild($nivel)
            
            //$fila.addEventListener("dblclick", ()=> cargarForm());
            element.appendChild($fila);

        });
    }

}