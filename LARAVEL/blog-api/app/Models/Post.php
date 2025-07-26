<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    // Agregamos el fillable para controlar los campos 
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // Cada post puede tener muchos comentarios
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
