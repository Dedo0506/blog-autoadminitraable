<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id','create_at', 'update_at' ];

    //relacion 1:N inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //relacion N:N 
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relacion 1:1 polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
