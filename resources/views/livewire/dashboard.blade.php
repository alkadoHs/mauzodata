<div class="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-none">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex gap-2 items-center mt-2 justify-end sm:px-4 lg:px-6">
        <a href="{{ route('dashboard') }}" class="mr-auto">
            <x-secondary-button>Reload</x-secondary-button>
        </a>
        <button class="bg-cyan-600 text-white leading-tight px-4 py-2 rounded">text slah</button>
        <x-text-input type="date" name="from-date" wire:model.live.debounce.1000ms="from_date" />
        <span>-</span>
        <x-text-input type="date" name="to-date" wire:model.live.debounce.1000ms="to_date" />
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 grid grid-cols-3 gap-4 overflow-x-auto">
            <div class="p-4 rounded-lg space-y-4 border border-gray-200 bg-white">
                <p class="t font-medium leading-none">Capital</p>
                <p class="text-xl font-medium">{{ number_format($capital)}}</p>
            </div>

            <div class="p-4 rounded-lg space-y-4 border border-gray-200 bg-white">
                <p class="t font-medium leading-none">Sales</p>
                <p class="text-xl font-medium">{{ number_format($sales)}}</p>
            </div>

            <div class="p-4 rounded-lg space-y-4 border border-gray-200 bg-white">
                <p class="t font-medium leading-none">Profit</p>
                <p class="text-xl font-medium">{{ number_format($profit)}}</p>
            </div>
        </div>
    </div>
</div>
