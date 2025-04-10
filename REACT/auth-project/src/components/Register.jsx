import React from 'react';
import { Link } from 'react-router';

function Register() {
  return (
    <div className="container mt-5">
      <div className="row justify-content-center">
        <div className="col-md-6">
          <div className="card">
            <div className="card-body">
              <h3 className="card-title text-center mb-4">Registro</h3>
              <form>
                <div className="mb-3">
                  <label htmlFor="username" className="form-label">Nombre de Usuario</label>
                  <input type="text" className="form-control" id="username" placeholder="Ingresa tu nombre de usuario" />
                </div>
                <div className="mb-3">
                  <label htmlFor="email" className="form-label">Correo Electrónico</label>
                  <input type="email" className="form-control" id="email" placeholder="Ingresa tu correo" />
                </div>
                <div className="mb-3">
                  <label htmlFor="password" className="form-label">Contraseña</label>
                  <input type="password" className="form-control" id="password" placeholder="Ingresa tu contraseña" />
                </div>
                <div className="mb-3">
                  <label htmlFor="confirmPassword" className="form-label">Confirmar Contraseña</label>
                  <input type="password" className="form-control" id="confirmPassword" placeholder="Confirma tu contraseña" />
                </div>
                <button type="submit" className="btn btn-primary w-100">Registrarse</button>
              </form>
              <div className="text-center mt-3">
                <Link to="/login">¿Ya tienes una cuenta? Inicia sesión</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Register;
