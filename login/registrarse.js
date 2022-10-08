const $body = document.getElementById("body"),
$seccionLogin = document.getElementById("seccion-login"),
$boton = document.getElementById("ingresar-reg"),
$seccionRegistro = document.getElementById("seccion-registro"),
datosRegistro = { usuario: null, email: null, contraseña: null, tipoSuscripcion: null};

// CAMBIA DEL FORM LOGIN AL FORM REGISTRO
document.getElementById("boton-registro").onclick = (e)=> {
    e.preventDefault();
    $seccionRegistro.classList.remove("none");
    $seccionLogin.classList.add("none");
 }

// CAMBIA DEL FORM REGISTRO AL FORM LOGIN
document.getElementById("volver-login").onclick = (e)=> {
    e.preventDefault();
    $seccionRegistro.classList.add("none");
    $seccionLogin.classList.remove("none");
}

// CARGA LOS DATOS DEL FORM REGISTRO AL OBJETO DATOSREGISTRO
document.getElementById("registro-boton").addEventListener("click", (e)=> {
    e.preventDefault();

    const $usuario = document.getElementById("usuario-reg"),
    $contraseña = document.getElementById("contraseña-reg"),
    $email = document.getElementById("email-reg");

    if(verificarDatos($usuario,$contraseña,$email)) {
        // LA EXPRESION / /g ELIMINA LOS ESPACIOS EN BLANCO 
        datosRegistro.usuario = $usuario.value.replace(/ /g, "");
        datosRegistro.contraseña = $contraseña.value.replace(/ /g, "");
        datosRegistro.email = $email.value.replace(/ /g, "");


        registrarUsuario(datosRegistro);
        $seccionRegistro.classList.toggle("none");
        $seccionLogin.classList.toggle("none");
        // $seccionSuscripcion.classList.toggle("none");
        // $botonVolver.classList.toggle("none");
    }
    else {
        alert("Complete todos los campos");
    }
})


function registrarUsuario(datosRegistro) {
    const datos = new FormData();
    datos.append("usuario", datosRegistro.usuario);
    datos.append("contraseña", datosRegistro.contraseña);
    datos.append("email", datosRegistro.email);
    datos.append("tipoSuscripcion", datosRegistro.tipoSuscripcion);
    
    fetch("../scriptsPHP/registrar.php", {
        method: 'POST',
        body: datos
    }) 
        .then(res => res.text() )
        .then(json => creacionMensaje(true, "Registro exitoso"))
        .catch(error => console.error('Error: ', error))
        /*.finally(()=> {
            $modalRegs.classList.add("none");
            $modalLogin.classList.remove("none");
        })*/
}
