<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retornamos todos los comentarios con la informacion del usuario y del post
        // Utilizando Query Builder
         return DB::table('comments')
             ->join('users', 'users.id', '=', 'comments.user_id')
             ->join('posts', 'posts.id', '=', 'comments.post_id')
             ->select('comments.*', 'users.name as user_name', 'posts.title as post_title')
             ->get();

        //Utilizando Eloquent
        //return Comment::with(['user', 'post'])->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'content' => 'required|string|max:255',
            'post_id' => 'required'
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'post_id' => $request->post_id,
            'user_id' => $request->user()->id
        ]);

        return response()->json([
            'message' => 'Comment created successfully',
            'comment' => $comment
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
