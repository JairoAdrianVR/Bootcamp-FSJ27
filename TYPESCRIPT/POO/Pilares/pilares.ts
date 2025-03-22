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
    protected nombre: string;
    public edad: number;
    private dui: string;

    constructor(nombreParam:string, edadParam:number, duiParam:string){
        this.nombre = nombreParam;
        this.edad = edadParam;
        this.dui = duiParam;
    }

    mostrarDatos(){
        console.log(`Nombre: ${this.nombre} y Edad: ${this.edad} y su DUI es: ${this.dui}`);
    }

    // Abstraccion -> Getters y Setters
    get getDui():string{
        return this.dui;
    }

}

let personita1 = new Persona("Katia", 23, "12345678-9");
personita1.edad = 22;

console.log(personita1.getDui);

console.log(personita1);
personita1.mostrarDatos();

