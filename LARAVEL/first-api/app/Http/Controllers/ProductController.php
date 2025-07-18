<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *  BACKEND
     */
    public function index()
    {
        // 2 POSIBLES SINTAXIS
        // Query Builder -> PODEMOS ARMAR CONSULTAS MAS ESPECIFICAS
        $products = DB::table('products')->select('id','name','price','stock')->get();

        // Eloquent
        $productsEloquent = Product::all();

        $data = ['holiwis'];

        return response()->json([
            'data' => $productsEloquent,
            'status' => 200
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * FRONTEND
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * BACKEND
     */
    public function store(Request $request)
    {
        // Sintaxis de antes
        /*
        $producto = new Product();
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->stock = $request->stock;

        $product->save() */

        //Sintaxis Eloquent
        $product = Product::create($request->all());

        //print_r($request->all());

        return response()->json([
            'message' => 'Product created successfully',
           'data' =>  $product,
           'status' => 201
        ],201);
    }

    /**
     * Display the specified resource.
     * FRONTEND
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * FRONTEND
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * BACKEND
     */
    public function update(Request $request, string $id)
    {
       
       try{
        // Buscar el producto
        $product = Product::findOrFail($id);

        //Actualizar el producto
        $product->update($request->all());

        return response()->json([
            'message' => "Product updated successufully",
            'data' => $product
        ]);

        }catch(\Exception $error){
            return response()->json([
            'message' => "Error al actualizar el producto",
            'error' => $error->getMessage()
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     * BACKEND
     */
    public function destroy(Product $product, string $id)
    {
        //Buscamos el producto a borrar
        $product = Product::findOrFail($id);

        //Eliminar ese producto
        $product->delete();

         return response()->json([
            'message' => "Product deleted successfully"
         ]);
    }
}
