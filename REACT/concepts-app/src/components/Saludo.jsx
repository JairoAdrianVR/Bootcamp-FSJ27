import { Chauchis } from './Chauchis'
import { useState } from 'react'

//Nuestro primer componente hermoso precioso una cosa de locos
  export function Saludo(){
    //Estados -> useState(VALOR INICIAL )
    //Hooks -> SON FUNCIONES PREHECHAS DE REACT QUE PERMITEN HACER COSAS
  const [nombre, setNombre ] = useState('Jesus');
  
  
  //let nombre = "Jesus";




  //destructuring object
  //let {nombre, apellido} = props;
 
  
  
    return <>
        <h2> Como andis querido {nombre}?</h2>
        <h3> Soy el componente Saludo</h3>
      
        <button onClick={() => { setNombre("Hector")}} >Magia</button>

        <Chauchis nombre = {nombre} />
    </>
  }
  
