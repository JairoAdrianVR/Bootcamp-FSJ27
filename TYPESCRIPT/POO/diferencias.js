//POO -> JS
// POO? Es un codigo reutilizable que se basa en clases y objetos
// Es en donde crea un script con una clase por ejemplo carro y usted le difine como unos parametros como las caracteristicas que tiene el carro y luego puede venir y hacer como una variable sea un objeto y darle como a esas caracteristicas sus propias caractaristicas y a la vez puede tener sus propias funciones como arrancar el motor o mostrar gasolina
// que usted puede crear clases y objetos y darle una forma predifinida como decia fernando estaba viendo un video de minecraft donde ellos creaban un objeto de cubo y eso podia ser tierra, agua, o algo asi. Eso lo puede tomar para cambiarle sus especificaciones o caracteristicas
// objeto uno lo puede pensar como algo en nuestra vida como algo tangible en este caso lo que me lleva a pensar estar orientado a algo intangible como la logica pensarlo a algo como un carro. Como esos de las clases mayores o menores y asi como estar usando la lofica de una funcion que sirve para esto o aquello seria como describirlo a algo mas tangible
// Clases ->  un molde creando algo a partir de el
// Objeto -> Instancia de la clase -> lo que se crea usando una clase
//Clase en javascript
/* class Cubo{

    constructor(material){
        //Obtener y guardar caracteristicas
        this.material = material;
    }
}*/
var Cubo = /** @class */ (function () {
    function Cubo(material) {
        //Obtener y guardar caracteristicas
        this.material = material;
    }
    return Cubo;
}());
var cubito = new Cubo('Madera');
console.log(cubito);
