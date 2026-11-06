<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-md bg-red-600 px-4 py-2 font-semibold text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2']) }}
>
    {{ $slot }}
</button>
