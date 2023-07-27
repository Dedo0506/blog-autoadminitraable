<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    /*esta funcion sirve para que cuando se cambia de paginancion si nos aplique 
    la busqueda en todos los datos no solo lo de la pagina mostrada actualmente*/
    public function updatingSearch( ){
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)
                    ->where('name','LIKE', '%'. $this->search . '%') //aqui se puede usar eloquent para que haga las consultas como SQL 
                    ->latest('id')                              //el . sirve para contatenar 
                    ->paginate();
        return view('livewire.admin.posts-index', compact('posts'));
    }
}
