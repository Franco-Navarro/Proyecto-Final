
// CERRAR SESION
document.getElementById("cerrar-sesion").onclick = ()=> location.href = '../scriptsPHP/destruirSesion.php';

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

// ESTA FUNCION ES TEMPORAL Y ABRE LA VENTANA DE DESCRIPCION DEL LIBRO
document.getElementById("tarjeta-libro").addEventListener("click", ()=> {
    window.location = "../libro_detalle_prueba/";
})

