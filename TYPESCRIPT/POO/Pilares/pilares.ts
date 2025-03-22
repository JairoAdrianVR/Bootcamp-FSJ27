class Animal{ 

    // Atributos o propiedades -> Caracteristicas generales y especificas
    nombre: string;
    edad: number;
    especie: string;
    tamanio: string;
    color: string;

    //Constructor -> Metodo que se ejecuta al crear un objeto de esta clase -> PALABRA RESERVADA NEW
    constructor(nombreParam:string, edadParam:number, especieParam:string, tamanioParam:string, colorParam:string){
        this.nombre = nombreParam;
        this.edad = edadParam;
        this.especie = especieParam;
        this.tamanio = tamanioParam;
        this.color = colorParam;
    }

    //Metodos -> Acciones o comportamientos
    comer(){
        console.log(`Estoy comiendo, no molestar. Atte: ${this.nombre}`);
    }


}

let puflito = new Animal("Puflito",2,"Perro","Pequeño","Blanco");
let panchito = new Animal("Panchito",25,"Tortuga","Grande","Morada");

//Guardando datos en las propiedades del objeto
puflito.nombre  = "Pufli";
//puflito.edad = 2;
//puflito.especie = "Perro";
//puflito.tamanio = "Pequeño";
//puflito.color = "Blanco";
console.log(panchito);
console.log(puflito);
panchito.comer();
puflito.comer();

console.log("----------------------------------------------------");


// PILARES DE POO => Facil de mantener y facil de escalar
// Encapsulamiento -> Limitar acceso a los atributos y metodos de una clase -> Modificadores de acceso
// Modificadores de acceso -> Public, Private, Protected
// Abstraccion -> Darnos metodos para nosotros poder trabajar sin comprender como funciona internamente

// Herencia
// Polimorfismo

class Persona { 
    
    // Encapsulamiento -> Modificadores de acceso
    private nombre: string;
    private edad: number;
    private dui?: string;

    constructor(nombreParam:string, edadParam:number, duiParam?:string){
        this.nombre = nombreParam;
        this.edad = edadParam;
        this.dui = duiParam;
    }

    mostrarDatos(){
        console.log(`Nombre: ${this.nombre} y Edad: ${this.edad} y su DUI es: ${this.dui}`);
    }

    // Abstraccion -> Getters y Setters
    get getDui():string|undefined{
        return this.dui;
    }

    set setAge(edadParam:number){
        
        //Validar que la edad nueva sea mayor que la edad anterior
        if(edadParam < this.edad){
            //console.log("HEY! No podes cumplir años para atras");
            throw new Error("HEY! No podes cumplir años para atras");
        }
        this.edad = edadParam;
    }

}

let personita1 = new Persona("Katia", 23, "12345678-9");
let personita2 = new Persona("Jairo", 26);
console.log(personita1);
console.log(personita1.getDui);
personita1.setAge = 24;
personita1.mostrarDatos();
personita2.mostrarDatos();


//Herencia -> Clase hija hereda atributos y metodos de la clase padre
class Programador extends Persona{
        lenguajesDeProgra: string[];

        constructor(nombreParam: string, edadParam: number, duiParam:string|undefined, lenguajesParam: string[]){
            //Super -> Hace referencia a los atributos de la clase padre
            super(nombreParam, edadParam, duiParam);
            this.lenguajesDeProgra = lenguajesParam;
        }

    //Polimorfismo -> Cambiar el comportamiento de un metodo heredado
        mostrarDatos(){
            super.mostrarDatos();
            console.log(`Los lenguajes de programacion que maneja son: ${this.lenguajesDeProgra}`);
        }

}

let programador = new Programador("Oscar", 29, "01234567-8",["Javascript","Typescript","PHP"]);
programador.mostrarDatos();