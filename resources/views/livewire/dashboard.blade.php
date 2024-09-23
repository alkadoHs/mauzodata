<div class="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <x-heroicon-o-arrow-left class="w-6 h-6 text-gray-500"/>

                <div x-data="{ expanded: false }" class="m-4 max-w-2xl">
                    <button class="bg-indigo-400/10" @click="expanded = ! expanded">Toggle Content</button>
                    <p x-show="expanded" x-collapse>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Possimus dolorum odit unde est doloremque debitis eos aliquid
                        aliquam facere asperiores distinctio
                        quisquam excepturi modi natus voluptas officiis totam, atque quasi!
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
