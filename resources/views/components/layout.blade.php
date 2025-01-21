<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Journal</title>
    {{-- @vite(['resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
</head>

<body class="h-full bg-black">
    <div class="min-h-full bg-black">
        <nav class="bg-black">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-16 w-16 pb-1" src="{{ asset('images/logo.png') }}" alt="Movie Journal Logo">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')" class="block">Home</x-nav-link>
                                <x-nav-link href="/movies" :active="request()->is('movies')" class="block">My Movies</x-nav-link>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-400 hover:text-white focus:outline-none">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @guest
                                <div class="flex space-x-4">
                                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                                </div>
                            @endguest

                            @auth
                                <form method="POST" action="/logout">
                                    @csrf
                                    <x-button class="text-white">Log Out</x-button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, hidden by default -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 flex flex-col">
                    <x-nav-link href="/" :active="request()->is('/')" class="block">Home</x-nav-link>
                    <x-nav-link href="/movies" :active="request()->is('movies')" class="block">My Movies</x-nav-link>
                </div>
                <div class="border-t border-gray-700 px-2 pt-4 pb-3">
                    @guest
                        <div class="flex flex-col space-y-1">
                            <div class="flex space-x-4">
                                <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                            </div>
                        </div>
                    @endguest

                    @auth
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="text-white">Log Out</button>
                        </form>
                    @endauth
                </div>
            </div>
        </nav>

        <header class="bg-black">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
                <h1 class="text-3xl font-bold tracking-tight text-white text-center sm:text-left">{{ $heading }}</h1>

                <x-button href="/movies/create" class="px-4 py-2 rounded self-center sm:self-auto">Add movie</x-button>
            </div>
        </header>

        <main class="bg-black">
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>