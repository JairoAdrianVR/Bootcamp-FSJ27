import './App.css';
import { BrowserRouter, Routes, Route } from 'react-router';
import { Home } from './components/Home';
import Login from './components/Login'; // Import the Login component
import Register from './components/Register'; // Import the Register component
import Navbar from './components/Navbar'; // Import the Navbar component

function App() {
  return (
    <>
      {/* BrowserRouter lo que hace es activar react router y poder enrutar */}
      <BrowserRouter>
     
      {/* Add Navbar component */}
      <Navbar /> 
      
        {/* Routes va a contener todas las rutas */}
        <Routes>
          {/* Aca van las rutas individualmente y le va decir que componente tiene que cargar CUANDO SE VAYA A ESA RUTA */}
          <Route path="/" element={<Home />} />
          <Route path="/login" element={<Login />} /> {/* Add Login route */}
          <Route path="/register" element={<Register />} /> {/* Add Register route */}
        </Routes>
      
      
      </BrowserRouter>
    </>
  );
}

export default App;
