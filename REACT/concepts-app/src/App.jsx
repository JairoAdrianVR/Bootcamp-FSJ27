import './App.css'
import { Saludo } from './components/Saludo'
function App() {


  //Llamar a un componente
  return (
    <>
      <h1>Holiwis</h1>
      {/* Llamo al componente saludo y sus props son nombre y apellido */}
      <Saludo/>
      
    </>
  )
}

export default App


