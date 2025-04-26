import React, { createContext, useState, useContext } from 'react';

// Crear el contexto
const UserDataContext = createContext();

// Proveedor del contexto
export const UserDataProvider = ({ children }) => {
    const [userData, setUserData] = useState(null);

    return (
        <UserDataContext.Provider  value={{userData, setUserData}}>
            {children}
        </UserDataContext.Provider>
    );
};

// Hook personalizado para usar el contexto
export const useUserData = () => {
    const context = useContext(UserDataContext);
    if (!context) {
        throw new Error('useUserData debe usarse dentro de un UserDataProvider');
    }
    return context;
};