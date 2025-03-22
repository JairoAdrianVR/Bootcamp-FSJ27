var nombre = "Jairo";
var edad = 25;
var tengoSuenio = true;
console.log(nombre);
console.log(edad);
console.log(tengoSuenio);
function saludar(nombre) {
    console.log("Holiwis ".concat(nombre));
    return "Holiwis ".concat(nombre);
}
var respuesta = saludar(nombre);
console.log(respuesta);
