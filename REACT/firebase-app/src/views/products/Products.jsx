import { useEffect, useState } from 'react';
import { useForm } from 'react-hook-form';
import { collection, getDocs, addDoc } from "firebase/firestore";
import { db } from '../../services/firebase/config';
//Necesitamos un formulario que permita ingresar nombre, precio y stock de un producto
// Necesitamos una tabla que muestre los productos 
// Y QUE TODO ESTO ESTE LINDO CON BOOTSTRAP

const Products = () => {
    const [products, setProducts] = useState([]);

    const {register, handleSubmit} = useForm();


    const getProducts = async () => {

        const productsCollection  = await getDocs(collection(db, "products"));
        //MOSTRAMOS LA INFORMACION EN CONSOLA
        console.log(productsCollection.docs.map( 
            (doc) => { console.log(doc.data());
            }
        ) )
        
        // OBTENEMOS LOS PRODUCTOS EN UNA CONSTANTE DATA
        const data = productsCollection.docs.map( (doc) => ({
            id: doc.id,
            ...doc.data()
        }));
        
        setProducts(data);
    }


    const addProduct = async (data) => {
        console.log(data);
        
        
        // Add a new document with a generated id.
        const docRef = await addDoc(collection(db, "products"), {
            name: data.name,
            price: parseFloat(data.price),
            stock: parseInt(data.stock)
          });
          console.log("Document written with ID: ", docRef.id); 
          
          getProducts();
          
    }



    useEffect(() => {
        getProducts();
    }
    , []);

    return (
        <div className="container mt-5">
            <h1 className="mb-4">Product Management</h1>
            <form onSubmit={handleSubmit(addProduct)} className="mb-4">
                <div className="mb-3">
                    <label htmlFor="name" className="form-label">Product Name</label>
                    <input
                        type="text"
                        className="form-control"
                        id="name"
                        name="name"
                        {...register("name")}
                        required
                    />
                </div>
                <div className="mb-3">
                    <label htmlFor="price" className="form-label">Price</label>
                    <input
                        type="text"
                        className="form-control"
                        id="price"
                        name="price"
                        {...register("price")}
                        required
                    />
                </div>
                <div className="mb-3">
                    <label htmlFor="stock" className="form-label">Stock</label>
                    <input
                        type="number"
                        className="form-control"
                        id="stock"
                        name="stock"
                        {...register("stock")}
                        required
                    />
                </div>
                <button type="submit" className="btn btn-primary">Add Product</button>
            </form>

            <table className="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                    </tr>
                </thead>
                <tbody>
                    {products.map((product, index) => (
                        <tr key={index}>
                            <th scope="row">{index + 1}</th>
                            <td>{product.name}</td>
                            <td>{product.price}</td>
                            <td>{product.stock}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default Products;