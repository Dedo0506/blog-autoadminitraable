<x-app-layout>
    <div class="container bg-red-500">
        Blog Administrable

        <div class="grid grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article>
                    {{-- Debido a que tengo un puerto asignado no pude hacer uso d la funcion Storage::url($post->image->url) por eso la ingrese manualmente--}}
                    <img src="http://blog.test:8000/storage/{{$post->image->url}}">
                </article>
            @endforeach
        </div>

    </div>
</x-app-layout>