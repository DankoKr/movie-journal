<x-layout>
    <x-slot:heading>
        Add Movie
    </x-slot:heading>

    <form method="POST" action="/movies" enctype="multipart/form-data" class="px-4 sm:px-6 lg:px-8">
        @csrf

        <div class="space-y-10">
            <div class="border-b border-yellow-600 pb-12">
                <div class="grid grid-cols-1 gap-y-8 sm:grid-cols-6 sm:gap-x-6">
                    <div class="col-span-1 sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-yellow-600">Title</label>
                        <div class="mt-2">
                            <input type="text" name="title" id="title" 
                                   class="block w-full rounded-md shadow-sm border border-yellow-600 bg-black py-1.5 px-3 text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-600 sm:text-sm" 
                                   placeholder="Movie Title" required>
                            @error('title')
                                <p class="text-xs text-yellow-600 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-1 sm:col-span-4">
                        <label for="tags" class="block text-sm font-medium leading-6 text-yellow-600">Tags (comma-separated)</label>
                        <div class="mt-2">
                            <input type="text" name="tags" id="tags" 
                                   class="block w-full rounded-md shadow-sm border border-yellow-600 bg-black py-1.5 px-3 text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-600 sm:text-sm" 
                                   placeholder="e.g., Action, Adventure, Drama" required>
                            @error('tags')
                                <p class="text-xs text-yellow-600 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-1 sm:col-span-4">
                        <label for="image_data" class="block text-sm font-medium leading-6 text-yellow-600">Image</label>
                        <div class="mt-2">
                            <input type="file" name="image_data" id="image_data" 
                                   class="block w-full text-sm text-white border border-yellow-600 bg-black rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-yellow-600" required>
                            @error('image_data')
                                <p class="text-xs text-yellow-600 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-1 sm:col-span-4">
                        <label for="trailer_url" class="block text-sm font-medium leading-6 text-yellow-600">Trailer URL</label>
                        <div class="mt-2">
                            <input type="url" name="trailer_url" id="trailer_url" 
                                   class="block w-full rounded-md shadow-sm border border-yellow-600 bg-black py-1.5 px-3 text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-600 sm:text-sm" 
                                   placeholder="https://example.com/trailer" required>
                            @error('trailer_url')
                                <p class="text-xs text-yellow-600 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-col-reverse sm:flex-row items-center justify-end gap-4">
            <x-button href="/movies" class="text-black bg-yellow-600 hover:bg-black hover:text-yellow-600">
                Cancel
            </x-button>
            <x-form-button>
                Save
            </x-form-button>
        </div>
    </form>
</x-layout>
