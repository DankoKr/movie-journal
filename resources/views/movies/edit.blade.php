<x-layout>
    <x-slot:heading>
        Movie: {{ $movie->title }}
    </x-slot:heading>

    <form method="POST" action="/movies/{{ $movie->id }}" class="px-4 sm:px-6 lg:px-8">
        @csrf
        @method('PATCH')

        <div class="space-y-10">
            <div class="border-b border-yellow-600 pb-12">
                <div class="grid grid-cols-1 gap-y-8 sm:grid-cols-6 sm:gap-x-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" placeholder="Shift Leader" value="{{ $movie->title }}" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="trailer_url">Trailer URL</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="url" name="trailer_url" id="trailer_url" placeholder="$50,000 Per Year" value="{{ $movie->trailer_url }}" required />
                            <x-form-error name="trailer_url" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-y-4 sm:gap-x-6">
            <div class="flex flex-col sm:flex-row w-full sm:w-auto order-1 sm:order-2 space-y-2 sm:space-y-0 sm:gap-x-6">
                <x-button href="/movies/{{ $movie->id }}" class="order-2 sm:order-1">
                    Cancels
                </x-button>
                <x-form-button class="order-1 sm:order-2">
                    Update
                </x-form-button>

            </div>

            <button form="delete-form" class="text-red-500 text-sm font-bold w-full sm:w-auto sm:mr-auto order-2 sm:order-1" 
                onclick="return confirm('Are you sure you want to delete this movie?');">
                Delete
            </button>
        </div>
    </form>

    <form method="POST" action="/movies/{{ $movie->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
