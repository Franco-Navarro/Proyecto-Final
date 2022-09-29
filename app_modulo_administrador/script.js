
// CERRAR SESION
document.getElementById("cerrar-sesion").onclick = ()=> location.href = '../scriptsPHP/destruirSesion.php';


// DESPLIEGA EL MENU DE NAVEGACION
document.getElementById("navegador-boton").addEventListener("click", ()=> {
    const $navegador = document.getElementById("navegador");
    $navegador.classList.toggle("navegador-abierto");
})