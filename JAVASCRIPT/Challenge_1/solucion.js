console.log("Estoy andando");

//Agarramos los elementos
let OpcPiedra = document.getElementById("btnPiedra");
let OpcPapel = document.getElementById("btnPapel");
let OpcTijera = document.getElementById("btnTijera");

console.log(OpcPiedra);
console.log(OpcPapel);
console.log(OpcTijera);

//Agregando los eventos para saber que opcion se eligio
/*
OpcPiedra.addEventListener("click", function(){
    OpcionElegida("Piedra");
})*/

OpcPapel.addEventListener("click", function(){
    OpcionElegida("Papel");
})

OpcTijera.addEventListener("click", function(){
    OpcionElegida("Tijera");
})

//Forma 2 de agregar eventos
function OpcionElegida(opcionUsuario){
    console.log("El usuario eligio: ");
    console.log(opcionUsuario);
    let resultado = '';
    
    // Eleccion de la computadora
    const opciones = ["Piedra",'Papel','Tijera'];
    console.log("La maquina ha hablado, eligio el: ");
    //console.log(opciones[ Math.floor( Math.random() * 3 ) ]);
    let eleccionDeLaPC = opciones[ Math.floor(Math.random()*3) ];
    console.log(eleccionDeLaPC);
    
    //console.log(Math.random()*2);
    //console.log(Math.floor(Math.random()*2));
    
    if(opcionUsuario === eleccionDeLaPC){
        resultado = 'Empate';
        console.log('Empate');
    }else if(
        (opcionUsuario === "Piedra" && eleccionDeLaPC === "Tijera") ||
        (opcionUsuario === "Papel" && eleccionDeLaPC === "Piedra") ||
        (opcionUsuario === "Tijera" && eleccionDeLaPC === "Papel") 
    ){
        resultado = "Ganaste!";
        console.log("Ganaste!");
    } else{
        resultado = "Perdiste!"
        console.log("Perdiste!");
        
    }

    //console.log(resultado);
    document.getElementById("resultado").innerText = `Elegiste: ${opcionUsuario} - La PC eligio: ${eleccionDeLaPC}\n ${resultado}`;
    
}
