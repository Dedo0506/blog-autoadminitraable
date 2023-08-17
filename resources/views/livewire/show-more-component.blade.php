<div>
    
        @php
            //numero de palabras que se mostrar de la observacion
            $total_palabras = 5;
            $caracteres = 'ÁÉÍÓÚáéíóúüÜñÑ0123456789.,;:/\%$-_[]¿?!¡()+-=*&@';

            //primeras palabras de la observacion que se mostraran
            $primeras_palabras = implode(' ', array_slice(str_word_count($post->body,1,$caracteres), 0, $total_palabras));

        @endphp
        
            @if((strlen($post->body)>=1) && (strlen($post->body
            
            
            ) <= 50) )
                
            @elseif(strlen($post->body) > 50)  
            
                <p>{{ $primeras_palabras }}

                    @if ($post->id === $postToShowMore)

                        {{$ultimos_caracteres = implode(' ', array_slice(str_word_count($post->body,1,$caracteres),$total_palabras))}}
                    @endif

                        @if ($post->id !== $postToShowMore)
                            <span wire:click="toggleDescription({{ $post->id }})" style="cursor: pointer;" class="text-blue-500 hover:underline">...más</span>
                        @else
                            <span wire:click="toggleDescription({{ $post->id }})" style="cursor: pointer;" class="text-blue-500 hover:underline">Ocultar</span>
                        @endif
                </p>
            
            @else
                {{ "" }}
            @endif
</div> 
