export function detalleLibro(json) {
    let $main = document.getElementById("main"),
        $tarjetaContainer = document.getElementById("tarjeta-container"),
        portada = json['portada'].replace(/ /g, "_"),
        titulo = json['titulo'].replace(/_/g, " "),
        autor = json['autor'],
        descripcion = json['descripcion'],
        pdf = json['pdf'],

        $section = document.createElement("seccion"),
        $article = document.createElement("article"),
        $contenedor = document.createElement("div"),
        $detalle = document.createElement("div"),
        $buttonAbrir = document.createElement("button"),
        $buttonVolver = document.createElement("button"),
        $buttonFavorito = document.createElement("button"),
        $spanAgregado = document.createElement("span"),
        $spanNoAgregado = document.createElement("span");

    $buttonVolver.classList.add("libro-detalle-volver-boton");
    $buttonVolver.innerHTML = `<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org 2000/svg"><path d="M2.0144 20C1.75082 20.0015 1.48953 19.9511 1.24552 19.8517C1.0015 19.7524 0.779561 19.606 0.592421 19.4209C0.404703 19.2352 0.255707 19.0144 0.154029 18.7711C0.0523498 18.5277 0 18.2667 0 18.0031C0 17.7395 0.0523498 17.4785 0.154029 17.2352C0.255707 16.9919 0.404703 16.771 0.592421 16.5854L7.22164 10.0158L0.852783 3.40621C0.479762 3.03208 0.270388 2.52597 0.270388 1.99844C0.270388 1.4709 0.479762 0.964796 0.852783 0.590662C1.03897 0.403502 1.26048 0.254948 1.50454 0.15357C1.74859 0.0521935 2.01037 0 2.27476 0C2.53915 0 2.80093 0.0521935 3.04499 0.15357C3.28904 0.254948 3.51055 0.403502 3.69674 0.590662L11.4275 8.57803C11.7945 8.9513 12 9.45314 12 9.97582C12 10.4985 11.7945 11.0003 11.4275 11.3736L3.41635 19.361C3.23658 19.5545 3.02013 19.7107 2.7795 19.8203C2.53887 19.93 2.27883 19.9911 2.0144 20Z" fill="#1A1A1A"/>
    </svg>Volver`;
    $buttonVolver.onclick = () => volver($section);

    $buttonAbrir.classList.add("libro-detalle-leer-boton");
    $buttonAbrir.innerHTML = `Comenzar a leer 
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org 2000/svg"><path d="M2.0144 20C1.75082 20.0015 1.48953 19.9511 1.24552 19.8517C1.0015 19.7524 0.779561 19.606 0.592421 19.4209C0.404703 19.2352 0.255707 19.0144 0.154029 18.7711C0.0523498 18.5277 0 18.2667 0 18.0031C0 17.7395 0.0523498 17.4785 0.154029 17.2352C0.255707 16.9919 0.404703 16.771 0.592421 16.5854L7.22164 10.0158L0.852783 3.40621C0.479762 3.03208 0.270388 2.52597 0.270388 1.99844C0.270388 1.4709 0.479762 0.964796 0.852783 0.590662C1.03897 0.403502 1.26048 0.254948 1.50454 0.15357C1.74859 0.0521935 2.01037 0 2.27476 0C2.53915 0 2.80093 0.0521935 3.04499 0.15357C3.28904 0.254948 3.51055 0.403502 3.69674 0.590662L11.4275 8.57803C11.7945 8.9513 12 9.45314 12 9.97582C12 10.4985 11.7945 11.0003 11.4275 11.3736L3.41635 19.361C3.23658 19.5545 3.02013 19.7107 2.7795 19.8203C2.53887 19.93 2.27883 19.9911 2.0144 20Z" fill="#1A1A1A"/>
    </svg>`;
    $buttonAbrir.onclick = () => {
        location.replace(`../lecturaPDF/index.php${window.location.hash}`);
    };

    $spanAgregado.innerHTML = `<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M24.9339 8.97626C24.8554 8.74484 24.7107 8.5415 24.5179 8.39133C24.3251 8.24117 24.0925 8.15075 23.8489 8.13126L16.7226 7.565L13.6389 0.738714C13.5407 0.518853 13.3809 0.332113 13.1789 0.201033C12.9769 0.0699519 12.7413 0.00013235 12.5005 1.87974e-07C12.2597 -0.000131974 12.024 0.0694289 11.8219 0.200288C11.6197 0.331147 11.4598 0.517711 11.3613 0.737464L8.27758 7.565L1.15129 8.13126C0.911857 8.15023 0.682959 8.23777 0.491979 8.38342C0.301 8.52907 0.156025 8.72666 0.0743997 8.95255C-0.00722552 9.17844 -0.0220451 9.42306 0.0317142 9.65714C0.0854734 9.89123 0.205535 10.1049 0.377535 10.2725L5.64382 15.4063L3.78131 23.4713C3.72475 23.7155 3.74288 23.971 3.83333 24.2047C3.92378 24.4384 4.08239 24.6395 4.28856 24.7819C4.49473 24.9243 4.73896 25.0015 4.98954 25.0034C5.24012 25.0053 5.4855 24.9319 5.69382 24.7926L12.5001 20.2551L19.3064 24.7926C19.5193 24.934 19.7704 25.0068 20.0259 25.0011C20.2815 24.9955 20.5291 24.9118 20.7356 24.7613C20.9422 24.6107 21.0976 24.4005 21.1811 24.1589C21.2646 23.9174 21.2721 23.6561 21.2027 23.4101L18.9164 15.41L24.5864 10.3075C24.9577 9.97252 25.0939 9.45001 24.9339 8.97626V8.97626Z" fill="#1A1A1A"/>
    </svg>`;
    $spanAgregado.id = "favorito-agregado";
    $spanAgregado.classList.add("none");
    $spanNoAgregado.innerHTML = `<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M5.64506 15.4057L3.78255 23.4707C3.72488 23.7149 3.74219 23.9709 3.83224 24.2051C3.92228 24.4393 4.08086 24.6409 4.28727 24.7836C4.49368 24.9263 4.73833 25.0034 4.98925 25.0049C5.24018 25.0064 5.48572 24.9322 5.69382 24.792L12.5001 20.2544L19.3064 24.792C19.5193 24.9333 19.7704 25.0061 20.0259 25.0005C20.2815 24.9949 20.5291 24.9112 20.7356 24.7606C20.9422 24.6101 21.0976 24.3999 21.1811 24.1583C21.2646 23.9168 21.2721 23.6554 21.2027 23.4095L18.9164 15.4094L24.5864 10.3069C24.768 10.1434 24.8977 9.93022 24.9594 9.69378C25.0212 9.45734 25.0123 9.20799 24.9338 8.97656C24.8553 8.74514 24.7107 8.54179 24.5179 8.39166C24.3251 8.24154 24.0925 8.15122 23.8489 8.13188L16.7226 7.56438L13.6389 0.738088C13.5405 0.518281 13.3807 0.33163 13.1786 0.20066C12.9766 0.0696904 12.7409 0 12.5001 0C12.2593 0 12.0237 0.0696904 11.8216 0.20066C11.6195 0.33163 11.4597 0.518281 11.3613 0.738088L8.27758 7.56438L1.15129 8.13063C0.911857 8.1496 0.682959 8.23714 0.491979 8.3828C0.301 8.52845 0.156025 8.72604 0.0743997 8.95192C-0.00722552 9.17781 -0.0220451 9.42243 0.0317142 9.65652C0.0854734 9.89061 0.205535 10.1043 0.377535 10.2719L5.64506 15.4057V15.4057ZM9.21134 9.99814C9.43446 9.98056 9.64874 9.90329 9.83172 9.77441C10.0147 9.64553 10.1596 9.4698 10.2513 9.26564L12.5001 4.28936L14.7489 9.26564C14.8406 9.4698 14.9855 9.64553 15.1685 9.77441C15.3515 9.90329 15.5658 9.98056 15.7889 9.99814L20.7539 10.3919L16.6651 14.0719C16.3101 14.3919 16.1689 14.8844 16.2989 15.3444L17.8651 20.8257L13.1951 17.7119C12.9901 17.5744 12.7488 17.5009 12.502 17.5009C12.2551 17.5009 12.0138 17.5744 11.8089 17.7119L6.92882 20.9657L8.24133 15.2832C8.28945 15.0742 8.283 14.8563 8.22258 14.6505C8.16215 14.4447 8.0498 14.258 7.89633 14.1082L4.09881 10.4056L9.21134 9.99814V9.99814Z" fill="#1A1A1A"/>
    </svg>`;
    $spanNoAgregado.id = "favorito-no-agregado";

    $buttonFavorito.appendChild($spanAgregado);
    $buttonFavorito.appendChild($spanNoAgregado);
    $buttonFavorito.classList.add("libro-detalle-favorito-boton");
    $buttonFavorito.onclick = () => {
        agregarFavorito(window.location.hash);
    }

    $detalle.classList.add("libro-detalle-contenido");
    $detalle.innerHTML = `<h2 class="libro-detalle-titulo">${titulo.toUpperCase()}</h2>
    <h3 class="libro-detalle-autor">${autor}</h3>
    <p class="libro-detalle-descripcion">${descripcion}</p>`
    $detalle.appendChild($buttonAbrir);

    $contenedor.classList.add("libro-detalle-contenedor");
    $contenedor.innerHTML = `<img class="tarjeta-libro-portada" src="${portada.toLowerCase()}" alt="portada de ejemplo">`
    $contenedor.appendChild($detalle);

    $article.appendChild($buttonVolver);
    $article.appendChild($buttonFavorito);
    $article.classList.add("libro-detalle");
    $article.appendChild($contenedor);


    $section.classList.add("seccion-libro-detalle");
    $section.appendChild($article);

    $tarjetaContainer.classList.add("none");
    $main.appendChild($section);
    estaEnFavoritos();

}


function volver(e) {
    let $main = document.getElementById("main"),
        $tarjetaContainer = document.getElementById("tarjeta-container");
    $main.removeChild(e);
    $tarjetaContainer.classList.remove("none");
}

function estaEnFavoritos() {
    let agregado = document.getElementById("favorito-agregado"),
        noAgregado = document.getElementById("favorito-no-agregado"),
        siEsta;

    /*Este if tiene que estar en un fetch que compruebe si el libro ya esta en la lista de favoritos del usuario
    pasandoselo al if para que cambie el icono*/
    if(siEsta) {
            agregado.classList.remove("none");
            noAgregado.classList.add("none");
    }
    else {
        agregado.classList.add("none");
        noAgregado.classList.remove("none");
    }
}


function agregarFavorito(titulo) {
    // Esta funcion tiene que comprobar si el libro esta en favoritos o no
    // si esta hace un fetch para eliminarlo
    // Y si no esta hace un fetch para agregarlo
    // Y que al final haga un if como en estaEnFavoritos() para cambiar el icono
    console.log(titulo);
}