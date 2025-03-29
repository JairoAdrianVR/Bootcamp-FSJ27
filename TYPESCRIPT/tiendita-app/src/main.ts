import './style.css'
import { Producto } from './clases/Producto';


document.querySelector<HTMLDivElement>('#app')!.innerHTML = `
  <div>
      <h1>Gestion de la Tiendita</h1>

      <h2>Agregar un nuevo producto</h2>
      <form id="form-add-product">
        <label> Nombre del producto: </label>
        <input type="text" id="input_nombre"/>
        <label> Precio del producto:</label>
        <input type="text" id="input_precio"/>
        <label> Marca: </label>
        <input type="text" id="input_marca"/>
        <label> Imagen: </label>
        <input type="text" id="input_imagen"/>
        <label> Descripcion: </label>
        <input type="text" id="input_descripcion"/>
        <label> Calificacion: </label>
        <input type="text" id="input_calificacion" />
        <label> Cantidad</label>
        <input type="text" id="input_cantidad"/>

        <button type="submit" >Agregar producto</button>
      </form>

      <ul id="lista_productos">
      </ul>
  </div>
`

//Agregar un nuevo producto -> nombre, precio, marca, imagen, descripcion, calificacion, cantidad 

let form = document.getElementById('form-add-product') as HTMLFormElement;
console.log(form);


form.addEventListener('submit',(e) => {
    e.preventDefault();

    let nombre = (document.getElementById('input_nombre') as HTMLInputElement).value;
    let precio = (document.getElementById('input_precio') as HTMLInputElement).value;
    let marca  = (document.getElementById('input_marca') as HTMLInputElement).value;
    let imagen = (document.getElementById('input_imagen') as HTMLInputElement).value;
    let descripcion = (document.getElementById('input_descripcion') as HTMLInputElement).value;
    let calificacion = (document.getElementById('input_calificacion') as HTMLInputElement).value;
    let cantidad = (document.getElementById('input_cantidad') as HTMLInputElement).value
    console.log(nombre);
    
    let producto = new Producto(nombre,parseFloat(precio),marca,imagen,descripcion,parseFloat(calificacion),parseInt(cantidad));
    console.log(producto);
    
    //Float 4.5 
    //Int 4 

    let lista_productos = document.getElementById('lista_productos') as HTMLUListElement;
    let li = document.createElement('li');

    li.innerHTML = `
        <h3>${producto.getNombre()}</h3>
        <p>Precio: ${producto.getPrecio()}</p>
        <p>Marca: ${producto.getMarca()}</p>
        <img src="${producto.getImagen()}" alt="${producto.getNombre()}" />
        <p>Descripcion: ${producto.getDescripcion()}</p>
        <p>Calificacion: ${producto.getCalificacion()}</p>
        <p>Cantidad: ${producto.getCantidad()}</p>

        <button>Eliminar</button>
    `
    lista_productos.append(li);
    form.reset();
})