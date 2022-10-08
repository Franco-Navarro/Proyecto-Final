// TODOS LOS PARAMETROS QUE SE MANDAN SE GUARDAN EN UN ARRAY QUE SE RECORRE UNO POR UNO VERIFICANDO QUE SEAN VALIDOS
function verificarDatos(...nodos) {
    for(const nodo of nodos) {
        if(nodo.checkValidity() == false) {return false};
    }
    return true
}