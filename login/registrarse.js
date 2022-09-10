const $modalRegs = document.getElementById("seccion-registro"),
$modalLogin = document.getElementById("seccion-login"),
$boton = document.getElementById("ingresar-reg"),
$seccionRegistro = document.getElementById("seccion-registro"),
$seccionTarjeta = document.getElementById("seccion-tarjeta"),
$seccionSuscripcion = document.getElementById("seccion-suscripcion"),

datosRegistro = { usuario: null, email: null, contraseña: null, tipoSuscripcion: null},
datosTarjeta = { numero: null, nombre: null, fecha: null, codigo: null, dni: null };

// CAMBIA DEL FORM LOGIN AL FORM REGISTRO
document.getElementById("boton-registro").onclick = (e)=> {
    e.preventDefault();
    $modalRegs.classList.remove("none");
    $modalLogin.classList.add("none");
 }

// CAMBIA DEL FORM REGISTRO AL FORM LOGIN
document.getElementById("volver-login").onclick = (e)=> {
    e.preventDefault();
    $modalRegs.classList.add("none");
    $modalLogin.classList.remove("none");
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

        $seccionRegistro.classList.toggle("none");
        $seccionSuscripcion.classList.toggle("none");
    }
    else {
        alert("Complete todos los campos");
    }
})

document.getElementById("suscripcion-gratuita").addEventListener("click", ()=> {
    datosRegistro.tipoSuscripcion = 1;
    registrarUsuario(datosRegistro);
})

document.getElementById("suscripcion-premium").addEventListener("click", ()=> {
    datosRegistro.tipoSuscripcion = 2;
    $seccionTarjeta.classList.toggle("none");
    $seccionSuscripcion.classList.toggle("none");
})

// CARGA LOS DATOS DEL FORM REGISTRO AL OBJETO DATOSREGISTRO
document.getElementById("tarjeta-boton").addEventListener("click", (e)=> {
    e.preventDefault();

    const $numero = document.getElementById("numero-tarjeta"),
    $nombre = document.getElementById("nombre-tarjeta"),
    $fecha = document.getElementById("fecha-tarjeta"),
    $codigo = document.getElementById("codigo-tarjeta"),
    $dni = document.getElementById("dni-tarjeta");

    if(verificarDatos($nombre,$numero,$fecha,$codigo,$dni)) {
        // LA EXPRESION / /g ELIMINA LOS ESPACIOS EN BLANCO 
        datosTarjeta.numero = $numero.value.replace(/ /g, "");
        datosTarjeta.nombre = $nombre.value;
        datosTarjeta.fecha = $fecha.value.replace(/ /g, "");
        datosTarjeta.codigo = $codigo.value.replace(/ /g, "");
        datosTarjeta.dni = $dni.value.replace(/ /g, "");

        registrarTarjeta(datosTarjeta);

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
        .then(json => alert(json))
        .catch(error => console.error('Error: ', error))
        /*.finally(()=> {
            $modalRegs.classList.add("none");
            $modalLogin.classList.remove("none");
        })*/
}

function registrarTarjeta(datosTarjeta) {
    const datos = new FormData();
    datos.append("numero", datosTarjeta.numero);
    datos.append("nombre", datosTarjeta.nombre);
    datos.append("fecha", datosTarjeta.fecha);
    datos.append("codigo", datosTarjeta.codigo);
    datos.append("dni", datosTarjeta.dni);

    datos.append("usuario", datosRegistro.usuario);
    datos.append("contraseña", datosRegistro.contraseña);
    datos.append("email", datosRegistro.email);
    datos.append("tipoSuscripcion", datosRegistro.tipoSuscripcion);
    
    fetch("../scriptsPHP/registrar.php", {
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

// TODOS LOS PARAMETROS QUE SE MANDAN SE GUARDAN EN UN ARRAY QUE SE RECORRE UNO POR UNO VERIFICANDO QUE SEAN VALIDOS
function verificarDatos(...nodos) {
    for(const nodo of nodos) {
        if(nodo.checkValidity() == false) {return false};
    }
    return true
}
