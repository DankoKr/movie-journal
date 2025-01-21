<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login" class="px-4 sm:px-6 lg:px-8">
        @csrf

        <div class="space-y-10">
            <div class="border-b border-yellow-600 pb-12">
                <div class="grid grid-cols-1 gap-y-8 sm:grid-cols-6 sm:gap-x-6">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" placeholder="j.doe@email.com" :value="old('email')" required />

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" placeholder="*******" required />

                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-col-reverse sm:flex-row items-center justify-end gap-4">
            <x-button href="/">Cancel</x-button>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>