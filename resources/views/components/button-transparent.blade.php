

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-transparent hover:bg-gray-400 text-gray-700 font-semibold hover:text-white py-2 px-8 border border-gray-400 hover:border-transparent rounded']) }}>
  {{ $slot }}
</button>
