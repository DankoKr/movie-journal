@props(['movie'])

<div class="bg-black text-white border border-yellow-700 rounded-lg shadow-lg overflow-hidden max-w-sm mx-auto transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
    <img class="w-full h-56 object-cover" src="{{ $movie->image_url }}" alt="{{ $movie->title }}">
    <div class="p-4">
        <h3 class="text-m text-yellow-600 font-bold mb-2">{{ $movie->title }}</h3>
        <div class="flex flex-wrap gap-2">
            @foreach(json_decode($movie->tags, true) ?? [] as $tag)
                <span class="px-3 py-1 bg-gray-900 text-gray-400 text-sm rounded-full">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</div>
