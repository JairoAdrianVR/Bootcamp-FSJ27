var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
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
    Object.defineProperty(Persona.prototype, "setAge", {
        set: function (edadParam) {
            //Validar que la edad nueva sea mayor que la edad anterior
            if (edadParam < this.edad) {
                //console.log("HEY! No podes cumplir años para atras");
                throw new Error("HEY! No podes cumplir años para atras");
            }
            this.edad = edadParam;
        },
        enumerable: false,
        configurable: true
    });
    return Persona;
}());
var personita1 = new Persona("Katia", 23, "12345678-9");
var personita2 = new Persona("Jairo", 26);
console.log(personita1);
console.log(personita1.getDui);
personita1.setAge = 24;
//personita1.mostrarDatos();
//personita2.mostrarDatos();
//Herencia -> Clase hija hereda atributos y metodos de la clase padre
var Programador = /** @class */ (function (_super) {
    __extends(Programador, _super);
    function Programador(nombreParam, edadParam, duiParam, lenguajesParam) {
        //Super -> Hace referencia a los atributos de la clase padre
        var _this = _super.call(this, nombreParam, edadParam, duiParam) || this;
        _this.lenguajesDeProgra = lenguajesParam;
        return _this;
    }
    //Polimorfismo -> Cambiar el comportamiento de un metodo heredado
    Programador.prototype.mostrarDatos = function () {
        _super.prototype.mostrarDatos.call(this);
        console.log("Los lenguajes de programacion que maneja son: ".concat(this.lenguajesDeProgra));
    };
    return Programador;
}(Persona));
var programador = new Programador("Oscar", 29, "01234567-8", ["Javascript", "Typescript", "PHP"]);
programador.mostrarDatos();
