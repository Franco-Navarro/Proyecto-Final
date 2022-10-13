

import {navegador} from "../../scripts/navUser.js";
import {header} from "../../scripts/headerBuscador.js";
import {tarjetaLibro} from "../../scripts/tarjetaLibro.js";
import {footer} from "../../scripts/footerGit.js";


let $body = document.getElementById("body"),
$main = document.getElementById("main"),
$contenedor = document.getElementById("tarjeta-container"),
$navegador = navegador(),
$header = header(),
$footer = footer(),
$tarjeta;


let nombres = ['el_camino_de_los_reyes','palabras_radiantes','juramentada','danzante_del_filo','el_ritmo_de_la_guerra',
'el_imperio_final','el_pozo_de_la_ascencion','el_heroe_de_las_eras','22_11_63','el_alquimista','el_fin_de_la_eternidad'];

for (let i = 0; i <= 10; i++) {
    let numero = i /*Math.floor(Math.random() * nombres.length)*/,
    json = {"portada":'../../assets/portada/'+nombres[numero]+'.png','titulo':nombres[numero],'autor':'Brandon Sanderson','descripcion':'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat cupiditate cum, minima minus non rerum alias neque aliquam adipisci id modi nihil suscipit porro perspiciatis incidunt exercitationem enim libero?','pdf':'../../assets/pdf/'+nombres[numero]+'.pdf'};


    $tarjeta = tarjetaLibro(json);
    $contenedor.appendChild($tarjeta);
}

$body.appendChild($header);
$main.appendChild($contenedor);
$body.appendChild($main);
$body.appendChild($footer);
$body.appendChild($navegador);