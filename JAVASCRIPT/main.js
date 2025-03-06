/*      DEFINICION DE JAVASCRIPT -> RETO: EXPLICARLE A UN CONEJILLO DE INDIAS ESTO (PERSONA QUE NO SABE)
    Javascript es una forma de hablarle a la computadora 
    Es interpretado por el navegador, osea, quien lo lee y entiende es el navegador
    Tambien puede ser interpretado por un servidor en NodeJS
    Debilmente Tipado -> Nos permite hacer algunas equivocaciones
*/

// COMENTARIOS -> SON LINEAS QUE NO SE EJECUTAN
// COMENTARIOS DE UNA LINEA

/* COMENTARIOS 
MULTI
LINEAS
*/

// IMPRIMIR O MOSTRAR MENSAJE O DATOS
console.log("Holiwis "+nombre);
console.log("Chau Jairo");

//Variables -> Espacio de memoria que guarda un valor 
// Palabra reservada NOMBRE_VARIABLE asigno VALOR
var nombre = "Jairo";
console.log(nombre);

//VAR VS LET

//VAR SE PUEDE REDECLARAR Y REINICIALIZAR
var nombre = "Jasson";
console.log(nombre);
nombre = "Pepito"
console.log(nombre);

//LET NO SE PUEDE REDECLARAR
let apellido = "Gonzalez";
console.log(apellido);

apellido = "Fuentes";
console.log(apellido);


//Const -> Constante no se puede redeclarar ni reinicializar
const pi = 3.1416;
console.log(pi);