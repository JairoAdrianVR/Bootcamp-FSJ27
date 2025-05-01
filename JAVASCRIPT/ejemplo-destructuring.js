
//Destructuring 


const persona = {
    nombre: "Jairo",
    edad: 27,
    funcion: () => { console.log("Holiwis");
    }
}

const {nombre,edad,funcion} = persona;

console.log(nombre);
console.log(edad);
funcion();

//Destructuring de array
let valorcito = "Holiwis"
const array = [valorcito,(url)=> { return(`viajando a ${url}`);}];
const [pepitofuentes,funcionsita] = array;

console.log(pepitofuentes);
funcionsita();


const useNavigate = () => {
    return funcionsita; 
}

const navegar = useNavigate();
console.log(navegar('/home'));