var Animal = /** @class */ (function () {
    //Constructor -> Metodo que se ejecuta al crear un objeto de esta clase -> PALABRA RESERVADA NEW
    function Animal(nombreParam, edadParam, especieParam, tamanioParam, colorParam) {
        this.nombre = nombreParam;
        this.edad = edadParam;
        this.especie = especieParam;
        this.tamanio = tamanioParam;
        this.color = colorParam;
    }
    //Metodos -> Acciones o comportamientos
    Animal.prototype.comer = function () {
        console.log("Estoy comiendo, no molestar. Atte: ".concat(this.nombre));
    };
    return Animal;
}());
var puflito = new Animal("Puflito", 2, "Perro", "Pequeño", "Blanco");
var panchito = new Animal("Panchito", 25, "Tortuga", "Grande", "Morada");
//Guardando datos en las propiedades del objeto
puflito.nombre = "Pufli";
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
var Persona = /** @class */ (function () {
    function Persona(nombreParam, edadParam, duiParam) {
        this.nombre = nombreParam;
        this.edad = edadParam;
        this.dui = duiParam;
    }
    Persona.prototype.mostrarDatos = function () {
        console.log("Nombre: ".concat(this.nombre, " y Edad: ").concat(this.edad, " y su DUI es: ").concat(this.dui));
    };
    Object.defineProperty(Persona.prototype, "getDui", {
        // Abstraccion -> Getters y Setters
        get: function () {
            return this.dui;
        },
        enumerable: false,
        configurable: true
    });
    return Persona;
}());
var personita1 = new Persona("Katia", 23, "12345678-9");
personita1.edad = 22;
console.log(personita1.getDui);
console.log(personita1);
personita1.mostrarDatos();
