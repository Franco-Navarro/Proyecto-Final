export function cargarSelect(element, tabla, columna) {
    const datos = new FormData();
    datos.append("tabla", tabla);
    datos.append("columna", columna);
    if (element.childNodes.length > 0)
    while (element.childNodes.length > 0) {
        element.removeChild(element.childNodes[0]);
    }
    fetch("../scriptsPHP/selectColumna.php", {
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(json => {
            json.forEach(e => {
                let $option = document.createElement("option");
                $option.value = e.valor;
                $option.innerHTML = e.valor;
                element.appendChild($option);
            });
        })
        .catch(error => console.error('Error: ', error))
}