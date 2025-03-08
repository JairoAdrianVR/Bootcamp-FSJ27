console.log("Holiwis"+3);


//Funciones reservadas de JS
//alert("Holiwis"); //Muestra mensaje
//let confirmacion = confirm("Holiwis"); //Muestra mensaje y devuelve true o false
//let respuesta = prompt("Holiwis, como estas?");

//console.log(confirmacion);
//console.log(respuesta);

let numero1 = prompt("Ingresa el primer numero a sumar: ");
let numero2 = prompt("Ingresa el segundo numero a sumar: ");
let resultado = sumar(numero1, numero2);
alert(resultado);
console.log(resultado);


function sumar(a, b){
    a = parseInt(a);
    b = parseInt(b);
    return a + b;
}


