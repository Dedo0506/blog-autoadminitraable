<x-app-layout>
    <div class="container py-8">

        <h1 class="text-4xl font-bold text-gray-600 ">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {{$post->extract}}
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="http://blog.test:8000/storage/{{$post->image->url}}" alt="">
                </figure>
                
                <div class="text-base text-gray-500 mt-4">
                    @livewire('show-more-component', ['post' => $post])

                {{-- {{$post->body}} 
                <div>
                    @php
                        $primeras_palabras = implode(' ', array_slice(str_word_count($post->body, 1), 0, 20));
                    @endphp
                
                    <p class="leading-7">{{ $primeras_palabras }} <span id="resto" class="hidden">{{ substr($post->body, strlen($primeras_palabras)) }}</span>
                
                    <button id="mostrar-mas" class="text-blue-500 hover:underline">...Mostrar más</button>
                    <button id="ocultar" class="text-blue-500 hover:underline hidden">Ocultar</button>
                </div></p>
                
                <script>
                    const botonMostrarMas = document.getElementById('mostrar-mas');
                    const botonOcultar = document.getElementById('ocultar');
                    const contenidoResto = document.getElementById('resto');
                
                    botonMostrarMas.addEventListener('click', function() {
                        contenidoResto.classList.remove('hidden');
                        botonMostrarMas.classList.add('hidden');
                        botonOcultar.classList.remove('hidden');
                    });
                
                    botonOcultar.addEventListener('click', function() {
                        contenidoResto.classList.add('hidden');
                        botonOcultar.classList.add('hidden');
                        botonMostrarMas.classList.remove('hidden');
                    });
                </script>--}}

                </div>
            </div>
            {{-- Contenido asociado --}}
            <aside class="text-2xl font-bold text-gray-600 mb-4">
                <h1>Mas en {{$post->categoria->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                <img class="w-36 h-20 object-cover object-center" src="http://blog.test:8000/storage/{{$similar->image->url}}">
                            <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </aside>
        </div>

    </div>

</x-app-layout>