<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>

    <form action="/movies" method="GET" class="mb-10 px-4">
        <div class="flex flex-col md:flex-row items-center gap-4">
            <x-form-input type="text" name="title" placeholder="Search by title" 
                value="{{ request('title') }}" />

            <x-form-input type="text" name="username" placeholder="Search by user's username" 
                value="{{ request('username') }}" />

            <x-form-button>
                Search
            </x-form-button>
        </div>
    </form>

    @if(request('username'))
        <p class="text-center mb-6 text-white">
            Viewing movies added by user: <strong>{{ request('username') }}</strong>
        </p>
    @endif

    <div class="flex flex-wrap justify-center gap-5">
        @foreach ($movies as $movie)
            <x-movie-card :movie="$movie"></x-movie-card>
        @endforeach
    </div>

    <div class="bg-white mt-6">              
        {{ $movies->links() }}
    </div>
</x-layout>