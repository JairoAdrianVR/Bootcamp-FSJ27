<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    //Columnas a utilizar en la tabla

    protected $fillable = [
        'content',
        'post_id',
        'user_id'
    ];

    //Cada comentario pertenece a un post
    public function post(){
        return $this->belongsTo(Post::class);
    }

    //Cada comentario pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
