@props(['disabled' => false])

<input 
    @disabled($disabled) 
    {{ $attributes->merge(['class' => 'block w-full border border-gray-300 bg-white text-gray-900 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400']) }}>
