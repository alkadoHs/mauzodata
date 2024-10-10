<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center text-sm px-4 py-2 bg-cyan-800 dark:bg-gray-200 border border-transparent rounded-md text-white dark:text-gray-800 tracking-widest hover:bg-cyan-700 dark:hover:bg-white focus:bg-cyan-700 dark:focus:bg-white active:bg-cyan-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 dark:focus:ring-offset-cyan-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
