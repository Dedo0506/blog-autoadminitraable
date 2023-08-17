<div>
    @php
        $primeras_palabras = implode(' ', array_slice(str_word_count($post->body, 1), 0, 20));
    @endphp

    <p>{{ $primeras_palabras }}
        @if ($post->id === $postToShowMore)
            {{ substr($post->body, strlen($primeras_palabras)) }}
        @endif
        @if ($post->id !== $postToShowMore)
            <span wire:click="toggleDescription({{ $post->id }})" style="cursor: pointer;" class="text-blue-500 hover:underline">... Mostrar más</span>
        @else
            <span wire:click="toggleDescription({{ $post->id }})" style="cursor: pointer;" class="text-blue-500 hover:underline">Ocultar</span>
        @endif

    </p>
    
</div>