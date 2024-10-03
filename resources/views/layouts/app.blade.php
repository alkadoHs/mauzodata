<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-gray-950">
        <div class="flex items-start w-full max-w-7xl mx-auto  bg-gray-100 dark:bg-gray-900/90 dark:text-gray-400">
            <nav class="hidden md:block dark dark:bg-gray-800  sticky top-0 w-[280px] max-w-full p-2 border-r border-gray-200 dark:border-gray-700 ">
                <livewire:layout.sidebar />
            </nav>
            
            <div class="w-full max-w-full overflow-hidden">
                <!-- Page Heading -->
                 <div>
                     <livewire:layout.navigation />
                 </div>
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800">
                        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
    
                <!-- Page Content -->
                <main class="px-4 max-w-full">
                    {{ $slot }}
                </main>

                @session('success')
                <div class="z-50 absolute bottom-4 right-4 p-3 rounded-lg text-green-700 bg-green-300/30" wire:transition>
                    {{ $value }}
                </div>
                @endsession


                @session('error')
                <div class="z-50 absolute bottom-4 right-4 p-3 rounded-lg text-red-700 bg-red-300/30" wire:transition>
                    {{ $value }}
                </div>
                @endsession
            </div>
        </div>
    </body>
</html>
