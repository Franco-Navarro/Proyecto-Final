import {verificarInputs} from "./verificarInputs.js";

export function altaRegistro(tipo) {
    if(tipo === "usuario") {
        let $id = document.getElementById("id-usuario").value, 
        $nombre= document.getElementById("nombre").value,
        $email= document.getElementById("email").value,
        $rol= document.getElementById("roles").options["selectedIndex"] + 1,
        $contrasenia= document.getElementById("contrasenia").value,
        datos = new FormData();

        if($id == "" || $id == undefined || $id == " "){$id = "NULL"};
       if(verificarInputs()) {
        datos.append("tipo",tipo);
        datos.append("id",$id);
        datos.append("nombre",$nombre);
        datos.append("email",$email);
        datos.append("rol",$rol);
        datos.append("contrasenia",$contrasenia);
            if(confirm("Seguro que quiere enviar el formulario de alta") == true) {
                fetch("../scriptsPHP/altaRegistro.php", {
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
    else if(tipo === "libro") {
        let $id = document.getElementById("id-libro").value, 
        $titulo= document.getElementById("titulo").value,
        $autor= document.getElementById("autor").options["selectedIndex"] + 1,
        $genero= document.getElementById("genero").options["selectedIndex"] + 1,
        $saga= document.getElementById("saga").value,
        $paginas= document.getElementById("paginas").value,
        $descripcion= document.getElementById("descripcion").value,
        datos = new FormData();
        if($id == "" || $id == undefined || $id == " "){$id = "NULL"};
       if(verificarInputs()) {
        datos.append("tipo",tipo);
        datos.append("id",$id);
        datos.append("titulo",$titulo);
        datos.append("autor",$autor);
        datos.append("genero",$genero);
        datos.append("saga",$saga);
        datos.append("paginas",$paginas);
        datos.append("descripcion",$descripcion);
            if(confirm("Seguro que quiere enviar el formulario de alta") == true) {
                fetch("../scriptsPHP/altaRegistro.php", {
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
    console.log(tipo)
}