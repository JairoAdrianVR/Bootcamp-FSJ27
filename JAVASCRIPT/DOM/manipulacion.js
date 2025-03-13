console.log("Holiwis");

//modificarlo (la forma de algo)
//mover algo a tu antojo
//moldear algo para que tome una forma

//Crearlo -> LO QUE QUIERO MANIPULAR TIENE QUE EXISTIR
//Agarrar -> ?? 

//Agarrar un elemento del DOM
// document referencia al documento HTML
let contenedor  = document.getElementById("contenedor");
console.log(contenedor);

const container = document.querySelector("#contenedor")
console.log(container);

//Modificarlo
//contenedor.style.backgroundColor = "red";


//Cuando tenemos mas de un elemento con la misma clase

let contenedores = document.getElementsByClassName("contenedor")
console.log(contenedores);

let containers = document.querySelectorAll(".contenedor");
console.log(containers);


console.log(containers[0]);
console.log(containers[1]);
//Agregar fondo rojo a los elementos con clase Contenedor
//contenedores[0].style.backgroundColor = "red";
//contenedores[1].style.backgroundColor = "red";


//Aplicamos la logica a la manipulacion de dom

for(let i = 0; i < contenedores.length; i++){
    contenedores[i].style.backgroundColor = "red";
}

