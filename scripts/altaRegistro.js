

document.getElementById("alta-usuario").addEventListener("click", (e)=> {
    e.preventDefault();
    if(confirm("Seguro que quiere enviar el formulario de alta") == true) {
        const datos = new FormData(document.getElementById("formABM-usuario"));
        fetch("../scriptsPHP/guardarArchivo.php", {
            method: 'POST',
            body: datos,
            cache:"no-cache"
        }) 
            .then(res => res.text() )
            .then(json => cargarRespuesta(json))
            .catch(error => console.error('Error: ', error))
            .finally(()=> {
                $modalAlta.classList.add("none");
            })
    }
})