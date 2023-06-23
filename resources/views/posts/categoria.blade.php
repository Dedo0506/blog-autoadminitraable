<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">

        <h1 class="uppercase text-center text-3xl font-bold">Caterogia:  {{$categoria->name}}</h1>

            @foreach ($posts as $post)
            {{-- Es muy importante que la sintaxis sea sin espacios para que se mande la variable al componente --}}
                <x-card-post :post="$post"/> 
            @endforeach

            <div class="mt-4">
                {{$posts->links()}}
            </div>

    </div>

</x-app-layout>