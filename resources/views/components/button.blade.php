<a {{ $attributes->merge(['class' => 
       'relative inline-flex items-center px-4 py-2 text-sm font-medium 
        text-black bg-yellow-600 border border-yellow-600 leading-5  
        rounded-md hover:bg-yellow-700 hover:border-yellow-700 hover:text-white
        focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 focus:outline-none
        focus:border-yellow-700 active:bg-yellow-800 active:border-yellow-800 
        active:text-yellow-200 transition ease-in-out duration-200'
    ]) }}>{{ $slot }}</a>