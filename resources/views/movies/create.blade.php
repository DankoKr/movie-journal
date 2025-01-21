<x-layout>
    <x-slot:heading>
        Add Movie
    </x-slot:heading>

    <form method="POST" action="/movies" enctype="multipart/form-data" class="px-4 sm:px-6 lg:px-8">
        @csrf

        <div class="space-y-10">
            <div class="border-b border-yellow-600 pb-12">
                <div class="grid grid-cols-1 gap-y-8 sm:grid-cols-6 sm:gap-x-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" placeholder="Movie Title" required></x-form-input>
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="tags">Tags (comma-separated)</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="tags" id="tags" placeholder="e.g., Action, Adventure, Drama" required></x-form-input>
                            <x-form-error name="tags" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="image_data">Image</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="file" name="image_data" id="image_data" required></x-form-input>
                            <x-form-error name="image_data" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="trailer_url">Trailer URL</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="url" name="trailer_url" id="trailer_url" placeholder="https://example.com/trailer" required></x-form-input>
                            <x-form-error name="trailer_url" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-col-reverse sm:flex-row items-center justify-end gap-4">
            <x-button href="/movies">
                Cancel
            </x-button>
            <x-form-button>
                Save
            </x-form-button>
        </div>
    </form>
</x-layout>
