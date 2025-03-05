<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#FFF700] hover:bg-[#e2dc2e] border border-transparent rounded-md font-semibold text-xs text-gray-900 font-bold uppercase tracking-widest  focus:bg-gray-700  focus:bg-white active:bg-gray-900  active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
