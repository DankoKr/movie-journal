@props(['movie'])

@php
    // Convert the binary image data to a base64 string
    $imageBase64 = $movie->image_data ? 'data:image/jpeg;base64,' . base64_encode($movie->image_data) : null;
@endphp

<a href="/movies/{{ $movie['id'] }}">
    <div class="bg-black text-white border border-yellow-700 rounded-lg shadow-lg overflow-hidden max-w-sm mx-auto transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl w-[280px]">
        @if($imageBase64)
            <img class="w-full h-56 object-cover" src="{{ $imageBase64 }}" alt="{{ $movie->title }}">
        @else
            <div class="w-full h-56 flex items-center justify-center bg-gray-800">
                <span class="text-gray-500">No Image Available</span>
            </div>
        @endif
        <div class="p-4">
            <h3 class="text-m text-yellow-600 font-bold mb-2">{{ $movie->title }}</h3>
            <div class="flex flex-wrap gap-2">
                @foreach(json_decode($movie->tags, true) ?? [] as $tag)
                    <span class="px-3 py-1 bg-gray-900 text-gray-400 text-sm rounded-full">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>
</a>
