const $formPrimero = document.getElementById("form-recuperar"),
$formSegundo = document.getElementById("form-recuperar-dos"),
datosUsuario = {
    usuario: null,
    email: null,
    contraseña: null
};


document.getElementById("recuperar-siguiente").addEventListener("click", (e)=> {
    e.preventDefault();

    const $usuario = document.getElementById("usuario-recu"),
    $email = document.getElementById("email-recu");

    if(verificarDatos($usuario,$email)) {
        datosUsuario.usuario = $usuario.value;
        datosUsuario.email = $email.value;

        $formPrimero.classList.toggle("none");
        $formSegundo.classList.toggle("none");
    }
    
})

document.getElementById("recuperar-contraseña-atra").addEventListener("click", (e)=> {
    e.preventDefault();
    $formPrimero.classList.remove("none");
    $formSegundo.classList.add("none");
})

document.getElementById("recuperar-contraseña").addEventListener("click", (e)=> {
    e.preventDefault();

    const $contraseña = document.getElementById("contraseña-recu"),
    $contraseñaCopia = document.getElementById("contraseña-copia-recu");

    if($contraseña.value === $contraseñaCopia.value){
        if(verificarDatos($contraseña)) {
            datosUsuario.contraseña = $contraseña.value;
            
            recuperarContraseña(datosUsuario);
        }
    }
})


// TODOS LOS PARAMETROS QUE SE MANDAN SE GUARDAN EN UN ARRAY QUE SE RECORRE UNO POR UNO VERIFICANDO QUE SEAN VALIDOS
function verificarDatos(...nodos) {
    for(const nodo of nodos) {
        if(nodo.checkValidity() == false) {return false};
    }
    return true
}


function recuperarContraseña(datosUsuario) {
    const datos = new FormData();
    datos.append("usuario", datosUsuario.usuario);
    datos.append("contraseña", datosUsuario.contraseña);
    datos.append("email", datosUsuario.email);
    
    fetch("../scriptsPHP/recuperar.php", {
        method: 'POST',
        body: datos
    }) 
        .then(res => res.text() )
        .then(json => alert(json))
        .catch(error => console.error('Error: ', error))
        /*.finally(()=> {
            $modalRegs.classList.add("none");
            $modalLogin.classList.remove("none");
        })*/
}