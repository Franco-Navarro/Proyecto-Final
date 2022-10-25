export function enviarMail(nombre, email, comentario) {
    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("email", email);
    datos.append("comentario", comentario);

    fetch("../../scriptsPHP/enviarComentario.php", {
        method: 'POST',
        body: datos
    })
        .then(res => res.text())
        .then(json => console.log(json))
        .catch(error => console.error('Error: ', error))
}