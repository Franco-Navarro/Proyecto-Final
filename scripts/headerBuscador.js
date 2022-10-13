export function header() {
    let $header = document.createElement("header"),
    $aside = buscador();

    $header.classList.add("header");
    $header.innerHTML = `<div class="header-logo"><a href="index.php"><img src="../../assets/logo.svg" alt=""></a></div>`
    $header.appendChild($aside);

    return $header;

}

function buscador() {
    let $aside = document.createElement("aside"),
    $filtro = document.createElement("div"),
    $barra = document.createElement("div"),
    $botonFiltro = document.createElement("button"),
    $botonBarra = document.createElement("button");

    $filtro.classList.add("header-buscador-filtro");
    $filtro.id = "buscador-filtro";
    $filtro.innerHTML = `<ul class="header-buscador-filtro-lista " id="buscador-filtro-lista">
        <li>
            <label for="autor">Autor</label>
            <input type="checkbox" name="autor" id="autor">
        </li>
        <li>
            <label for="genero">Genero</label>
            <input type="checkbox" name="genero" id="genero">
        </li>
        <li>
            <label for="titulo">Titulo</label>
            <input type="checkbox" name="titulo" id="titulo">
        </li>
        <li>
            <label for="gratis">Gratuito</label>
            <input type="checkbox" name="gratis" id="gratis">
        </li>
    </ul>`
    $botonFiltro.classList.add("header-buscador-filtro-boton");
    $botonFiltro.innerHTML = `<svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.86318e-05 1.80758C-0.00133894 1.57106 0.043993 1.3366 0.133429 1.11764C0.222864 0.898677 0.354643 0.699523 0.521206 0.531596C0.688274 0.363152 0.887041 0.229454 1.10604 0.138214C1.32504 0.0469752 1.55994 1.96046e-07 1.79719 1.93217e-07C2.03443 1.90387e-07 2.26933 0.0469752 2.48833 0.138214C2.70733 0.229454 2.9061 0.363152 3.07317 0.531596L8.98582 6.48019L14.9344 0.765227C15.2711 0.430505 15.7266 0.242627 16.2014 0.242627C16.6762 0.242627 17.1317 0.430505 17.4684 0.765227C17.6368 0.932296 17.7705 1.13106 17.8618 1.35006C17.953 1.56906 18 1.80396 18 2.04121C18 2.27846 17.953 2.51335 17.8618 2.73235C17.7705 2.95135 17.6368 3.15012 17.4684 3.31719L10.2798 10.2542C9.94383 10.5835 9.49217 10.768 9.02176 10.768C8.55135 10.768 8.09969 10.5835 7.76375 10.2542L0.575119 3.06559C0.400917 2.90428 0.260403 2.71005 0.161694 2.49413C0.0629864 2.2782 0.0080395 2.04486 2.86318e-05 1.80758Z" fill="#1A1A1A"/>
    </svg>`;
    $botonFiltro.onclick = ()=> document.getElementById("buscador-filtro").classList.toggle("header-buscador-filtro-abierto");
    $filtro.appendChild($botonFiltro);

    $barra.classList.add("header-buscador-barra");
    $barra.innerHTML = `<input type="text" class="header-buscador-barra-input" id="buscador-input">`
    $botonBarra.classList.add("header-buscador-barra-boton");
    $botonBarra.innerHTML = `<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.6386 19.9036L17.4844 15.7616C18.8247 14.054 19.552 11.9454 19.5493 9.77463C19.5493 7.84139 18.976 5.95157 17.9019 4.34414C16.8279 2.73671 15.3013 1.48387 13.5152 0.744053C11.7291 0.00423516 9.76379 -0.189335 7.8677 0.187821C5.9716 0.564977 4.22993 1.49592 2.86293 2.86293C1.49592 4.22993 0.564977 5.9716 0.187821 7.8677C-0.189335 9.76379 0.00423516 11.7291 0.744053 13.5152C1.48387 15.3013 2.73671 16.8279 4.34414 17.9019C5.95157 18.976 7.84139 19.5493 9.77463 19.5493C11.9454 19.552 14.054 18.8247 15.7616 17.4844L19.9036 21.6386C20.0172 21.7531 20.1523 21.844 20.3012 21.906C20.4501 21.9681 20.6098 22 20.7711 22C20.9324 22 21.0921 21.9681 21.241 21.906C21.3899 21.844 21.525 21.7531 21.6386 21.6386C21.7531 21.525 21.844 21.3899 21.906 21.241C21.9681 21.0921 22 20.9324 22 20.7711C22 20.6098 21.9681 20.4501 21.906 20.3012C21.844 20.1523 21.7531 20.0172 21.6386 19.9036ZM2.44366 9.77463C2.44366 8.3247 2.87362 6.90733 3.67915 5.70176C4.48469 4.49619 5.62963 3.55656 6.96919 3.0017C8.30875 2.44683 9.78276 2.30166 11.2048 2.58452C12.6269 2.86739 13.9332 3.5656 14.9584 4.59085C15.9837 5.61611 16.6819 6.92236 16.9647 8.34443C17.2476 9.7665 17.1024 11.2405 16.5476 12.5801C15.9927 13.9196 15.0531 15.0646 13.8475 15.8701C12.6419 16.6756 11.2246 17.1056 9.77463 17.1056C7.83034 17.1056 5.96568 16.3332 4.59085 14.9584C3.21603 13.5836 2.44366 11.7189 2.44366 9.77463Z" fill="#1A1A1A"/>
    </svg>`;
    $botonBarra.onclick = ()=> buscar();
    $barra.appendChild($botonBarra);

    $aside.classList.add("header-buscador");
    $aside.appendChild($filtro);
    $aside.appendChild($barra);
    return $aside
}

function buscar(){
    
}