<a {{ $attributes->merge(['class' => 
       'w-full sm:w-auto rounded-md bg-black px-3 py-2 text-sm font-semibold text-yellow-600 shadow-sm hover:text-white transition duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2'
    ]) }}>{{ $slot }}</a>
