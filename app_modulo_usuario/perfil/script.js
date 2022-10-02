
// CERRAR SESION
document.getElementById("cerrar-sesion").onclick = ()=> location.href = '../../scriptsPHP/destruirSesion.php';

// DESPLIEGA EL MODAL DE FILTROS
document.getElementById("buscador-filtro-boton").addEventListener("click", ()=> {
    const $filtros = document.getElementById("buscador-filtro");
    $filtros.classList.toggle("header-buscador-filtro-abierto");
});

// DESPLIEGA EL MENU DE NAVEGACION
document.getElementById("navegador-boton").addEventListener("click", ()=> {
    const $navegador = document.getElementById("navegador");
    $navegador.classList.toggle("navegador-abierto");
})

document.getElementById("comentario").addEventListener("click", (e)=> {
    e.preventDefault();
    const $perfil = document.getElementById("seccion-perfil"),
    $comentario = document.getElementById("seccion-comentario");

    $perfil.classList.add("none");
    $comentario.classList.remove("none");
})

document.getElementById("seccion-comentario-volver").addEventListener("click", (e)=> {
    e.preventDefault();
    const $perfil = document.getElementById("seccion-perfil"),
    $comentario = document.getElementById("seccion-comentario");

    $perfil.classList.remove("none");
    $comentario.classList.add("none");
})