<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /**
     * Display a listing of posts with their associated user information.
     *
     * This method retrieves all posts from the database, joining each post with its corresponding user.
     * The result includes all post fields, as well as the user's name and email.
     * In case of an exception, it returns a JSON response with the error message.
     * @param Request $request
     * @throws Exception
     * @return \Illuminate\Support\Collection|\Illuminate\Http\JsonResponse
     */

    public function index()
    {
        try{
        //Query builder
        //return DB::table('posts')->join('users','users.id','=','posts.user_id')->select('posts.*','users.name as user_name')->get();

        return DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.*', 'users.name as user_name', 'users.email as user_email')
            ->get();
        
            //Traer los Post que hay creados
       // return Post::with('user')->get();

        }catch(Exception $error){
            return response()->json([
                'error' => $error->getMessage()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Creamos un nuevo post

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        //Crear un nuevo post a traves de los modelos
        $post = $request->user()->posts()->create($request->all());

        //Otra sintaxis para crear
        /*
        $postcito = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user()->id
        ])*/

        return response()->json([
            'message' => 'Post Created Successfully',
            'data' => $post
        ],201);  
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
        // Buscamos el post por su ID
        $post = Post::findOrFail($id);


        //Actualizamos el post
        //Primera manera
        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        //Segunda manera
        //$post->update($request->all());

        return response()->json([
            'message' => 'Post Updated Successfully',
            'data' => $post
        ]);

        } catch(Exception $error){
            return response()->json([
                'error' => $error->getMessage()
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //Buscamos el post por su ID
        $post = Post::findOrFail($id);

        //Validar si el usuario autenticado es el dueño del post
        if ($post->user_id !== $request->user()->id) {
            return response()->json([
                'error' => 'Unauthorized'
            ], 403);
        }

        //Eliminamos el post
        $post->delete();

        return response()->json([
            'message' => 'Post Deleted Successfully'
        ]);
    }

}

