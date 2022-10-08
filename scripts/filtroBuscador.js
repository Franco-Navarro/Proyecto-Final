const $filtros = document.getElementById("buscador-filtro");

// DESPLIEGA EL MODAL DE FILTROS
document.getElementById("buscador-filtro-boton").addEventListener("click", ()=> {
    $filtros.classList.toggle("header-buscador-filtro-abierto");
});