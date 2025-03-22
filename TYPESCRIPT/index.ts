let nombre : string = "Jairo";
let edad : number = 25;
let tengoSuenio: boolean = true;
console.log(nombre);
console.log(edad);
console.log(tengoSuenio);

function saludar (nombre : string):string {
    console.log(`Holiwis ${nombre}`);
    return `Holiwis ${nombre}`;
}

let respuesta:string = saludar(nombre);

console.log(respuesta);
