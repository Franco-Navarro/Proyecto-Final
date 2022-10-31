export function cargarArchivo() {
    let $titulo = document.getElementById("titulo-select").value,
        $pdf = document.getElementById("pdf").files[0],
        $portada = document.getElementById("portada").files[0],
        datos = new FormData();
        $titulo = $titulo.replace(/ /g, "_")
    datos.append("titulo", $titulo.toLowerCase());
    datos.append("pdf", $pdf);
    datos.append("portada", $portada);
    if (confirm("Seguro que quiere cargar estos archivos") == true) {
        fetch("../scriptsPHP/guardarArchivo.php", {
            method: 'POST',
            body: datos,
            cache: "no-cache"
        })
            .then(res => res.text())
            .then(json => alert(json))
            .catch(error => console.error('Error: ', error))

    }
}