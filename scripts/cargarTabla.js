import {crearTabla} from "./tablaABM.js"


export function cargarTabla(tipo) {
    let libro = {
        "tipo":"libro",
        "array":[
            {
                "titulo":"juramentada", 
                "autor":"brandon sanderson",
                "genero":"fantasia",
                "saga":"el archivo de las tormentas",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"la_piedra_filosofal", 
                "autor":"jk rowling",
                "genero":"fantasia",
                "saga":"harry potter",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"amanecer_rojo", 
                "autor":"pierce brown",
                "genero":"ciencia ficcion",
                "saga":"amanecer rojo",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"el_alquimista", 
                "autor":"paulo coelho",
                "genero":"drama",
                "saga":"el alquimista",
                "nivel":"1",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"juramentada", 
                "autor":"brandon sanderson",
                "genero":"fantasia",
                "saga":"el archivo de las tormentas",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"la_piedra_filosofal", 
                "autor":"jk rowling",
                "genero":"fantasia",
                "saga":"harry potter",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"amanecer_rojo", 
                "autor":"pierce brown",
                "genero":"ciencia ficcion",
                "saga":"amanecer rojo",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"el_alquimista", 
                "autor":"paulo coelho",
                "genero":"drama",
                "saga":"el alquimista",
                "nivel":"1",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"juramentada", 
                "autor":"brandon sanderson",
                "genero":"fantasia",
                "saga":"el archivo de las tormentas",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"la_piedra_filosofal", 
                "autor":"jk rowling",
                "genero":"fantasia",
                "saga":"harry potter",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"amanecer_rojo", 
                "autor":"pierce brown",
                "genero":"ciencia ficcion",
                "saga":"amanecer rojo",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"el_alquimista", 
                "autor":"paulo coelho",
                "genero":"drama",
                "saga":"el alquimista",
                "nivel":"1",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"juramentada", 
                "autor":"brandon sanderson",
                "genero":"fantasia",
                "saga":"el archivo de las tormentas",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"la_piedra_filosofal", 
                "autor":"jk rowling",
                "genero":"fantasia",
                "saga":"harry potter",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"amanecer_rojo", 
                "autor":"pierce brown",
                "genero":"ciencia ficcion",
                "saga":"amanecer rojo",
                "nivel":"2",
                "descripcion":"descripcion del libro actual"
            },
            {
                "titulo":"el_alquimista", 
                "autor":"paulo coelho",
                "genero":"drama",
                "saga":"el alquimista",
                "nivel":"1",
                "descripcion":"descripcion del libro actual"
            },
        ]
    }
    let user = {
        "tipo":"user",
        "array":[
            {
                "usuario":"juancho", 
                "contraseña":"12345",
                "email":"juancho@gmail.com",
                "nivel":"1"
            },
            {
                "usuario":"pepe", 
                "contraseña":"pepe123",
                "email":"pepe@gmail.com",
                "nivel":"2"
            },
            {
                "usuario":"admin", 
                "contraseña":"admin",
                "email":"emailAdmin@gmail.com",
                "nivel":"3"
            },
            {
                "usuario":"jefe", 
                "contraseña":"adminJefe",
                "email":"jefe@gmail.com",
                "nivel":"4"
            },
            {
                "usuario":"juanchoOV", 
                "contraseña":"123456",
                "email":"juancho2@gmail.com",
                "nivel":"1"
            },
            {
                "usuario":"carlos", 
                "contraseña":"123carlos",
                "email":"carlitos@gmail.com",
                "nivel":"2"
            },
        ]
    }
    //LIBRO Y USER SE REMPLAZAN POR EL JSON TRAIDO DEL FETCH
    if(tipo === "libro"){
        let $tabla = document.getElementById("tabla-cuerpo-libro")
        if($tabla.childNodes.length > 0)
        while($tabla.childNodes.length > 0) {
            $tabla.removeChild($tabla.childNodes[0]);
        }
        crearTabla(libro, $tabla)

    }
    else if(tipo === "usuario") {
        let $tabla = document.getElementById("tabla-cuerpo-usuario")
        while($tabla.childNodes.length > 0) {
            $tabla.removeChild($tabla.childNodes[0]);
        }
        crearTabla(user, $tabla)
    }
}