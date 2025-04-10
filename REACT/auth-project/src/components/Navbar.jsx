import { Link } from 'react-router';

const Navbar = () => {
    return (
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
            <div className="container-fluid">
                {/* Logo */}
                <Link className="navbar-brand" to="/">
                    <img
                        src="https://via.placeholder.com/50"
                        alt="Logo"
                        width="30"
                        height="30"
                        className="d-inline-block align-text-top"
                    />
                    MyApp
                </Link>

                {/* Toggle button for mobile view */}
                <button
                    className="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span className="navbar-toggler-icon"></span>
                </button>

                {/* Navigation Links */}
                <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav ms-auto">
                        <li className="nav-item">
                            <Link className="nav-link" to="/">
                                Home
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/login">
                                Inicio Sesión
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/register">
                                Registro
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;