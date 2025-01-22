<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>

    <div class="flex flex-wrap justify-center gap-5">
        @foreach ($movies as $movie)
            <x-movie-card :movie=$movie></x-movie-card>
        @endforeach
    </div>
        <div class="bg-white">              
            {{ $movies->links() }}
        </div>
</x-layout>