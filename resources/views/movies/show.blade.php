<x-layout>
    <x-slot:heading>
        Movie Details
    </x-slot:heading>

    <div class="relative max-w-4xl mx-auto bg-black text-white rounded-lg shadow-lg p-6 flex flex-wrap lg:flex-nowrap items-center gap-6">
        <div class="w-full lg:w-1/3">
            @php
                $imageBase64 = $movie->image_data ? 'data:image/jpeg;base64,' . base64_encode($movie->image_data) : null;
            @endphp
            @if($imageBase64)
                <img class="w-full h-auto rounded-lg object-cover" src="{{ $imageBase64 }}" alt="{{ $movie->title }}">
            @else
                <div class="w-full h-48 bg-gray-800 flex items-center justify-center rounded-lg">
                    <span class="text-gray-500 text-sm">No Image Available</span>
                </div>
            @endif
        </div>

        <div class="flex-1">
            <h2 class="text-3xl font-bold text-yellow-600 mb-10">{{ $movie->title }}</h2>

            @if($movie->trailer_url)
                <div class="mb-4">
                    <x-button href="{{ $movie->trailer_url }}" target="_blank" rel="noopener noreferrer">
                        Watch Trailer on YouTube
                    </x-button>
                </div>
            @else
                <p class="text-gray-500 italic">Trailer not available</p>
            @endif

            <div>
                <h3 class="text-lg font-semibold text-yellow-600 mb-2 mt-2">Genres:</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(json_decode($movie->tags, true) ?? [] as $tag)
                        <span class="px-3 py-1 bg-gray-700 text-gray-300 text-sm rounded-full">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
                <div class="mt-6 border-t border-yellow-600 w-full"></div>
                <div class="mt-6 flex flex-col-reverse sm:flex-row items-center justify-end gap-4">
                    <x-secondary-button href="/movies">
                        Back
                    </x-secondary-button>
                    @can('edit-movie', $movie)
                    <x-secondary-button href="/movies/{{ $movie->id }}/edit">
                        Edit Movie
                    </x-secondary-button>
                    @endcan
                </div>
        </div>
    </div>
</x-layout>
