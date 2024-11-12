<?php

use App\Models\Product;
use App\Models\DamageProduct;

use function Livewire\Volt\{state, rules, with};

state([
    'product_id',
    'amount',
    'desc'
]);

rules([
    'product_id' => 'required',
    'amount' => 'required|numeric|max:9999999|min:0',
    'desc' => 'required|string|max:255|min:5'
]);

$store = function () {
    $validated = $this->validate();

    $product = Product::find($this->product_id);

    if($validated['amount'] > $product->stock) {
        session()->flash('error', 'Stock is not enough.');
        $this->redirect(route('damages'), navigate:true);
    } else {
        DamageProduct::create($validated);

        $product->decrement('stock', $validated['amount']);

        session()->flash('success', 'Damage added.');

        $this->reset();
    }


    $this->dispatch('damages-changed');
};

with([
    'products' => Product::get(),
]);


?>

<div class="space-y-6">
    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-damage-modal')"
    >{{ __('Add damage') }}</x-primary-button>

    <x-modal name="create-damage-modal" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="store" class="p-6">

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Add damaged product') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('') }}
            </p>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="product_id" value="{{ __('Product') }}" />

                    <select data-hs-select='{
                            "hasSearch": true,
                            "searchPlaceholder": "Search...",
                            "searchClasses": "block w-full text-sm border-gray-200 rounded-lg focus:border-cyan-500 focus:ring-cyan-500 before:absolute before:inset-0 before:z-[1] dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:placeholder-gray-500 py-2 px-3",
                            "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-gray-900",
                            "placeholder": "Select products...",
                            "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200 \" data-title></span></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
                            "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-gray-700 dark:[&::-webkit-scrollbar-thumb]:bg-gray-500 dark:bg-gray-900 dark:border-gray-700",
                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-gray-200 dark:focus:bg-gray-800",
                            "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200 \" data-title></div></div></div>",
                            "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                            }' class="hidden" name="product_id" wire:model="product_id">
                        <option value="">{{ __('Select product')}}</option>
                        @foreach ($products as $product)
                            <option wire:key="$product->id" value="{{ $product->id }}">{{ $product->name }}({{ $product->stock }})</option>
                        @endforeach
                    </select>
    
                    <x-input-error :messages="$errors->get('product_id')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="amount" value="{{ __('Stock') }}" />
    
                    <x-text-input
                        wire:model="amount"
                        id="amount"
                        name="amount"
                        type="number"
                        class="mt-1 block"
                    />
                    <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="desc" value="{{ __('Description') }}" />
    
                    <x-text-input
                        wire:model="desc"
                        id="desc"
                        name="desc"
                        type="text"
                        class="mt-1 block"
                    />
                    <x-input-error :messages="$errors->get('desc')" class="mt-2" />
                </div>
            </div>



            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Add damage') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</div>
