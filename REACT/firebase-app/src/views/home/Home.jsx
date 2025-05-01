import { useUserData } from "../../context/UserDataContext";
import { Logout } from "../session/components/Logout";

export const Home = () => {

   //Destructuring objeto
     const {userData} = useUserData();
  

     //console.log(userData);
     
  return (
    <div className="container mt-5">
      <h2 className="text-center"> Hola, {userData ? userData.displayName : "Invitado" } ! </h2>
    </div>
  )
}

