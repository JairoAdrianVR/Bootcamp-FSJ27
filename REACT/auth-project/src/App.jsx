import './App.css'
import {BrowserRouter , Routes, Route} from 'react-router'
import {Home }from './components/Home'

function App() {
  
  return (
    <>
    {/* BrowserRouter lo que hace es activar react router y poder enrutar */ }
      <BrowserRouter>
      {/* Routes va a contener todas las rutas */}
        <Routes>
      {/* Aca van las rutas individualmente y le va decir que componente tiene que cargar CUANDO SE VAYA A ESA RUTA */}
        <Route  path='/' element={<Home />} />


        </Routes>

      </BrowserRouter>

    </>
  )
}

export default App
