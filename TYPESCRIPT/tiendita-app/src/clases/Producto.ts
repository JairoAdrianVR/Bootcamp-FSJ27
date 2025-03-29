/* nombre, precio, marca, imagen, descripcion, calificacion, cantidad */


export class Producto { 
    private nombre: string; 
    private precio: number;
    private marca: string;
    private imagen: string;
    private descripcion: string;
    private calificacion: number;
    private cantidad: number;


    constructor(nombre: string, precio: number, marca: string, imagen: string, descripcion: string, calificacion: number, cantidad: number) {
        this.nombre = nombre;
        this.precio = precio;
        this.marca = marca;
        this.imagen = imagen;
        this.descripcion = descripcion;
        this.calificacion = calificacion;
        this.cantidad = cantidad;
    }

    
    public getNombre():string{
        return this.nombre;
    }

    public setNombre(nombreParam:string){
        this.nombre = nombreParam;
    }

    public getPrecio(): number {
        return this.precio;
    }

    public setPrecio(precio: number): void {
        this.precio = precio;
    }

    public getMarca(): string {
        return this.marca;
    }

    public setMarca(marca: string): void {
        this.marca = marca;
    }

    public getImagen(): string {
        return this.imagen;
    }

    public setImagen(imagen: string): void {
        this.imagen = imagen;
    }

    public getDescripcion(): string {
        return this.descripcion;
    }

    public setDescripcion(descripcion: string): void {
        this.descripcion = descripcion;
    }

    public getCalificacion(): number {
        return this.calificacion;
    }

    public setCalificacion(calificacion: number): number {
        this.calificacion = calificacion;
        return this.calificacion
    }

    public getCantidad(): number {
        return this.cantidad;
    }

    public setCantidad(cantidad: number): void {
        this.cantidad = cantidad;
    }

}
