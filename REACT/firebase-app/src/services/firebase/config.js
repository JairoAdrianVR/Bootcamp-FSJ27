// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAQeaQKnUE9NpoPRN5tnyLac4Qzxv-nWo4",
  authDomain: "fir-project-b597e.firebaseapp.com",
  projectId: "fir-project-b597e",
  storageBucket: "fir-project-b597e.firebasestorage.app",
  messagingSenderId: "182315636352",
  appId: "1:182315636352:web:0e917e1a3f7c1fc4407865"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Firebase Authentication and get a reference to the service
export const auth = getAuth(app);