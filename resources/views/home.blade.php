<x-layout>
    <div class="text-center py-10 text-white">
        <h1 class="text-4xl md:text-6xl font-bold text-yellow-600">
            Track Your Movie Watch List
        </h1>
        <p class="mt-10 mb-10 text-lg md:text-xl max-w-3xl mx-auto">
            create your own watchlist by adding movies with trailers you love
        </p>
        @guest
        <x-button class="px-5 py-3" href="/login">
            Get Started
        </x-button>
        @endguest
        @auth
        <x-button class="px-5 py-3" href="/movies/create">
            Add Movie
        </x-button>
        @endauth
    </div>
</x-layout>