@props(['active' => false])

<a class="{{ $active ? 'text-white': 'text-yellow-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>