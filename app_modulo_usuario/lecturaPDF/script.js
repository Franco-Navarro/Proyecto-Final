// DESACTIVA LOS CLICKS DERECHOS DENTRO DE LA WEB
//document.oncontextmenu = ()=>{return false}


// PARAMETROS PARA CARGAR EL PDF
let url = `../../assets/pdf/${window.location.hash.substring(1)}.pdf`,
pdfCargado = null, // VARIABLE PARA EL ARCHIVO
tipoActual = false; // VARIABLE PARA EL TIPO DE LECTURA: false 1 PAGINA; true 2 PAGINA
// ES UNA MIERDA LO DE true o false YA LO SE LO TENGO QUE CAMBIAR

// CARGA LA PAGINA INDICADA AL CARGAR LA WEB 
(()=> {
  window.scrollTo(0,0);
  cambiarPagina(paginaActual(), zoomActual(), tipoActual);
} )();

// PASA A LA SIGUIENTE PAGINA
document.getElementById("paginaSiguiente").addEventListener("click", ()=> {
  window.scrollTo(0,0);
  if(tipoActual === true) {
    document.getElementById("paginaActual").value = paginaActual() + 2;
    cambiarPagina(paginaActual(), zoomActual(), tipoActual);
  }
  else {
    document.getElementById("paginaActual").value = paginaActual() + 1;
    cambiarPagina(paginaActual(), zoomActual(), tipoActual);
  }
  
})

// VUELVE A LA PAGINA ANTERIOR
document.getElementById("paginaAnterior").addEventListener("click", ()=> {
  window.scrollTo(0,0);
  if(tipoActual === true) {
    document.getElementById("paginaActual").value = paginaActual() - 2;
    cambiarPagina(paginaActual(), zoomActual(), tipoActual);
  }
  else {
    document.getElementById("paginaActual").value = paginaActual() - 1;
    cambiarPagina(paginaActual(), zoomActual(), tipoActual);
  }
})

// CARGA LA PAGINA INDICADA EN EL INPUT NUMBER
document.getElementById("paginaInput").addEventListener("click", ()=> {
  cambiarPagina(paginaActual(), zoomActual(), tipoActual);
})

// DISMINUYE EL ZOOM
document.getElementById("menosZoom").addEventListener("click", ()=> {
  if(zoomActual() >= 1.25) {
    document.getElementById("zoomActual").value = ((100 * zoomActual()) - 25) + "%";
    cambiarPagina(paginaActual(), zoomActual(), tipoActual);
  }
})

// AUMENTA EL ZOOM
document.getElementById("masZoom").addEventListener("click", ()=> {
  if(zoomActual() <= 2.75) {
    document.getElementById("zoomActual").value = ((100 * zoomActual()) + 25) + "%";
    cambiarPagina(paginaActual(), zoomActual(), tipoActual);
  }
})

// CAMBIA EL MODO DE UNA PAGINA A DOS Y VICEVERSA
document.getElementById("dos-pagina").addEventListener("click", ()=> {
  if(tipoActual === false) {
    tipoActual = true;
  }
  else {
    tipoActual = false;
  }
  let $canvasDos = document.getElementById("pdf-2-renderer"); 
  $canvasDos.classList.toggle("none");
  cambiarPagina(paginaActual(), zoomActual(), tipoActual);
})

// ESTA FUNCION CARGA LAS PAGINAS DE UNA EN UNA
function cambiarPagina(paginaNumero, zoom, tipoDos) {
  let $canvas = document.getElementById("pdf-renderer"),
  $canvasDos = document.getElementById("pdf-2-renderer"); 

  pdfjsLib.getDocument(url).promise.then((pdf)=> { // TRAE EL PDF INDICADO EN URL
    pdfCargado = pdf;

    pdfCargado.getPage(paginaNumero, zoom).then((page)=> { // TRAE LA PAGINA DEL PDF
      let viewport = page.getViewport({ scale: zoom });
      $canvas.height = viewport.height;
      $canvas.width = viewport.width;          
      page.render({canvasContext: $canvas.getContext('2d'), viewport: viewport});

      if(tipoDos) { // SI EL MODO ESTA PUESTO EN DOS PAGINAS TRAE UNA SEGUNDA PAGINA
        pdfCargado.getPage((paginaNumero+1), zoom).then((page)=> {     
          $canvasDos.height = viewport.height;
          $canvasDos.width = viewport.width;   
          page.render({canvasContext: $canvasDos.getContext('2d'), viewport: viewport});
        })
      }
    })
  })
}

// TOMA LA PAGINA QUE ESTA INDICADA EN EL INPUT
function paginaActual() {
  const inputPaginaActual = document.getElementById("paginaActual").value;
  return parseInt(inputPaginaActual);
}

// TOMA EL ZOOM INDICADO EN EL INPUT Y LO DIVIDE POR 100 PARA USARLO EN LA FUNCION cambiarPagina()
function zoomActual() {
  const zoomInputActual = document.getElementById("zoomActual").value;
  let zoom = zoomInputActual.replace("%", "");
  return (zoom / 100);
}


// PIDO PERDON SI NO SE ENTIENDE NADA, NO LO ENTIENDO NI YO JAJAJAJA
// YA VERE DE ARREGARLO UN POCO SI SOBRA TIEMPO
// LO IMPORTANTE ES QUE FUNCIONA :)