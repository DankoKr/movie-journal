<a {{ $attributes->merge(['class' => 
       'w-full sm:w-auto rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-black text-center
        shadow-sm hover:bg-black hover:text-yellow-600 
        transition duration-300 focus:outline-none focus:ring-2 
        focus:ring-yellow-600 focus:ring-offset-2'
    ]) }}>{{ $slot }}</a>
