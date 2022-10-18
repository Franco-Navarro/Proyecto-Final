export function navegadorAdmin() {
    
    let $navegador = document.createElement('nav'),
    $botonAbrir = document.createElement('button'),
    $botonSalir = document.createElement('button'),
    $lista = lista();
    
    $navegador.classList.add("navegador");
    $navegador.id = "navegador";

    $botonAbrir.classList.add("navegador-boton");
    $botonAbrir.innerHTML = `<svg width="15" height="24" viewBox="0 0 15 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.4101 24C2.09475 24.0018 1.78213 23.9413 1.49018 23.8221C1.19824 23.7028 0.932697 23.5271 0.708795 23.3051C0.484202 23.0823 0.305938 22.8173 0.184286 22.5253C0.0626333 22.2333 0 21.9201 0 21.6038C0 21.2874 0.0626333 20.9742 0.184286 20.6822C0.305938 20.3902 0.484202 20.1252 0.708795 19.9024L8.64025 12.0189L1.0203 4.08745C0.574006 3.63849 0.323503 3.03117 0.323503 2.39812C0.323503 1.76508 0.574006 1.15775 1.0203 0.708795C1.24306 0.484202 1.50808 0.305937 1.80009 0.184285C2.09209 0.0626322 2.40528 0 2.72161 0C3.03794 0 3.35114 0.0626322 3.64314 0.184285C3.93514 0.305937 4.20016 0.484202 4.42292 0.708795L13.6723 10.2936C14.1113 10.7416 14.3573 11.3438 14.3573 11.971C14.3573 12.5982 14.1113 13.2004 13.6723 13.6483L4.08745 23.2332C3.87237 23.4654 3.6134 23.6528 3.3255 23.7844C3.0376 23.916 2.72648 23.9893 2.4101 24Z" />
    </svg>`;
    $botonAbrir.onclick = ()=> {$navegador.classList.toggle("navegador-abierto")}

    $botonSalir.classList.add("navegador-salir");
    $botonSalir.innerHTML = `<svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4 0H28.7999C30.5648 0 32 1.4352 32 3.2V25.6C32 27.3648 30.5648 28.8 28.7999 28.8H14.4C12.6352 28.8 11.2 27.3648 11.2 25.6V19.2H14.4V25.6H28.7999V3.2H14.4V9.6H11.2V3.2C11.2 1.4352 12.6352 0 14.4 0ZM8 12.8H22.4V16H8V20.8L0 14.4L8 8V12.8Z" fill="black"/>
    </svg><label for="">Cerrar Sesion</label>`;

    $botonSalir.onclick = ()=> location.href = '../scriptsPHP/destruirSesion.php';

    $navegador.appendChild($botonAbrir);
    $navegador.appendChild($lista); 
    $navegador.appendChild($botonSalir);

    return $navegador;
}


function lista() {
    let lista = document.createElement('ul');

    lista.classList.add("navegador-lista");
        let menu = document.createElement('li');

        menu.innerHTML = `<a href="../app_modulo_usuario/menu/index.php"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 0L32 17.0667H28V32H20V21.3333H12V32H4V17.0667H0L16 0Z" fill="#1A1A1A"/></svg><label for="">Inicio</label></a>`;
        /*perfil = document.createElement('li'),
        biblioteca = document.createElement('li');
        perfil.innerHTML = `<a href="../perfil/index.php"><svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.4444 14.2222C13.8509 14.2222 15.2257 13.8052 16.3952 13.0238C17.5646 12.2424 18.476 11.1318 19.0143 9.83242C19.5525 8.53303 19.6933 7.10322 19.4189 5.7238C19.1445 4.34438 18.4673 3.07731 17.4728 2.0828C16.4783 1.08829 15.2112 0.411025 13.8318 0.136641C12.4523 -0.137743 11.0225 0.00308114 9.72314 0.541304C8.42375 1.07953 7.31315 1.99098 6.53177 3.16039C5.75039 4.32981 5.33333 5.70467 5.33333 7.11111C5.33333 8.9971 6.08254 10.8058 7.41613 12.1394C8.74972 13.473 10.5585 14.2222 12.4444 14.2222ZM23.1111 32C23.5826 32 24.0348 31.8127 24.3682 31.4793C24.7016 31.1459 24.8889 30.6937 24.8889 30.2222C24.8889 26.9217 23.5778 23.7565 21.244 21.4227C18.9102 19.0889 15.7449 17.7778 12.4444 17.7778C9.14397 17.7778 5.97868 19.0889 3.64489 21.4227C1.31111 23.7565 4.91809e-08 26.9217 0 30.2222C0 30.6937 0.187301 31.1459 0.520699 31.4793C0.854097 31.8127 1.30628 32 1.77778 32H23.1111Z" fill="#1A1A1A"/></svg><label for="">Perfil</label></a>`;

        biblioteca.innerHTML = `<a href="../biblioteca/index.php"><svg width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0H20V28L10 22L0 28V0Z" fill="#1A1A1A"/></svg><label for="">Favoritos</label></a>`
        lista.appendChild(perfil);
        lista.appendChild(biblioteca);*/
        lista.appendChild(menu);
        

        let libro = document.createElement('li'),
        usuario = document.createElement('li');

        libro.innerHTML = `<div>
        <svg width="29" height="32" viewBox="0 0 29 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.6667 0H5.33333C3.91885 0 2.56229 0.561903 1.5621 1.5621C0.561903 2.56229 0 3.91885 0 5.33333V26.6667C0 28.0812 0.561903 29.4377 1.5621 30.4379C2.56229 31.4381 3.91885 32 5.33333 32H26.6667C27.1382 32 27.5903 31.8127 27.9237 31.4793C28.2571 31.1459 28.4444 30.6937 28.4444 30.2222V1.77778C28.4444 1.30628 28.2571 0.854097 27.9237 0.520699C27.5903 0.187301 27.1382 0 26.6667 0ZM5.33333 28.4444C4.86184 28.4444 4.40965 28.2571 4.07625 27.9237C3.74286 27.5903 3.55556 27.1382 3.55556 26.6667C3.55556 26.1952 3.74286 25.743 4.07625 25.4096C4.40965 25.0762 4.86184 24.8889 5.33333 24.8889H24.8889V28.4444H5.33333Z" fill="#1A1A1A"/></svg><label for="">ABM Libros</label>
        </div>
`;
        libro.onclick = ()=> {
            let $mainUsuario = document.getElementById("main-usuario"),
            $mainLibro = document.getElementById("main-libro");

            $mainLibro.classList.remove("none");
            $mainUsuario.classList.add("none");
        } 
       
        usuario.innerHTML = `<div>
        <svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.4444 14.2222C13.8509 14.2222 15.2257 13.8052 16.3952 13.0238C17.5646 12.2424 18.476 11.1318 19.0143 9.83242C19.5525 8.53303 19.6933 7.10322 19.4189 5.7238C19.1445 4.34438 18.4673 3.07731 17.4728 2.0828C16.4783 1.08829 15.2112 0.411025 13.8318 0.136641C12.4523 -0.137743 11.0225 0.00308114 9.72314 0.541304C8.42375 1.07953 7.31315 1.99098 6.53177 3.16039C5.75039 4.32981 5.33333 5.70467 5.33333 7.11111C5.33333 8.9971 6.08254 10.8058 7.41613 12.1394C8.74972 13.473 10.5585 14.2222 12.4444 14.2222ZM23.1111 32C23.5826 32 24.0348 31.8127 24.3682 31.4793C24.7016 31.1459 24.8889 30.6937 24.8889 30.2222C24.8889 26.9217 23.5778 23.7565 21.244 21.4227C18.9102 19.0889 15.7449 17.7778 12.4444 17.7778C9.14397 17.7778 5.97868 19.0889 3.64489 21.4227C1.31111 23.7565 4.91809e-08 26.9217 0 30.2222C0 30.6937 0.187301 31.1459 0.520699 31.4793C0.854097 31.8127 1.30628 32 1.77778 32H23.1111Z" fill="#1A1A1A"/> </svg><label for="">ABM Usuarios</label></div>`;

        usuario.onclick = ()=> {
            let $mainUsuario = document.getElementById("main-usuario"),
            $mainLibro = document.getElementById("main-libro");

            $mainLibro.classList.add("none");
            $mainUsuario.classList.remove("none");
        }

        
        lista.appendChild(usuario);
        lista.appendChild(libro);
    return lista;
}

