<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //habilita la asignacion masiva
    protected $fillable = ['name','slug'];

    //funcion para que no aparezca el id de la categoria, sino el nombre en la URL
    public function getRouteKeyName()
    {
        return "slug";
    }

    //relacion 1:N

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
