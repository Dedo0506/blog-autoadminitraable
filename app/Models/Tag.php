<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    //habilita la asignacion masiva
    protected $fillable = ['name','slug', 'color'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //relacion de N:N 
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
