<?php

use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\PaymentMethod;

use function Livewire\Volt\{state, mount, usesPagination, computed};

usesPagination();

state(['search' => '']);

state([
    'transportFee' => auth()->user()?->cart?->transportFee,
]);

$products = computed(function () {
    $productsExistsToCart = auth()->user()->cartItems()->pluck('product_id')->toArray();

    return Product::where('branch_id', auth()->user()->branch_id)
                     ->where('name', 'LIKE', "%{$this->search}%")
                     ->whereNotIn('id', $productsExistsToCart)
                     ->paginate(3);
});


$addToCart = function (Product $product) {
    $cartExists = auth()->user()->cart;

    if ($cartExists) {
        $cartExists->cartItems()->create([
            'product_id' => $product->id,
            'buy_price' => $product->buy_price,
            'price' => $product->sale_price,
            'qty' => 1,
            'transport' => $product->transport,
        ]);

        session()->flash('success', 'Product added to the cart.');
    } else {
        $newCart = Cart::create(['user_id' => auth()->id()]);

        $newCart->cartItems()->create([
            'product_id' => $product->id,
            'buy_price' => $product->buy_price,
            'price' => $product->sale_price,
            'qty' => 1,
            'transport' => $product->transport,
        ]);

        session('success', 'New cart created. Product added to the cart.');
    }

    $this->redirect(route('pos'), navigate:true);
};

$save = function () {
    auth()->user()->cart->update([
        'customer_id' => $this->customer_id,
        'payment_method_id' => $this->payment_method_id,
        'isDrafted' => $this->isDrafted,
        'vendor_id' => $this->vendor_id,
        'isCredit' => $this->isCredit,
        'transportFee' => $this->transportFee,
    ]);
};

$chargeTransport = function () {
    auth()->user()->cart->update([
        'transportFee' => $this->transportFee,
    ]);

    $this->redirect(route('pos'), navigate:true);
};

$deleteCustomer = function () {
    auth()->user()->cart->customer->delete();

    $this->redirect(route('pos'), navigate:true);
}

?>

<div class="pb-4">
    <div class="my-2 w-full">
        <x-text-input type="search" class="w-full" name="search" wire:model.live.debounce.1000ms="search" placeholder="Search product" />
    </div>
    <div class="relative max-h-dvh space-y-4 bg-white dark:bg-gray-500/20 overflow-auto whitespace-nowrap" wire:lazy>
        <table class="w-full border-collapse border dark:border-gray-700">
            <thead class="dark:text-gray-300">
                <tr class=" z-10">
                    <th class="1 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Product')}}</th>
                    <th class="1 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Stock')}}</th>
                    <th class="1 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Selling price')}}</th>
                    <th class="1 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('W.Price')}}</th>
                    <th class="1 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('W.Stock')}}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-400">
                @foreach ($this->products as $product)
                    <tr wire:key="{{ $product->id }}" 
                        wire:click="addToCart({{$product->id}})"
                        class="transition-all duration-150 cursor-pointer hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                        <td class="p-1 text-sm border dark:border-gray-700">
                                {{ $product?->name }}~<span class="text-orange-500">{{ $product->unit }}</span>
                        </td>
                        <td class="p-1 text-right border dark:border-gray-700">
                            {{ number_format($product->stock,2)}}
                        </td>
                        <td class="p-1 text-sm text-right border dark:border-gray-700">{{ number_format($product->sale_price ) }}</td>
                        <td class="p-1 text-sm text-right border dark:border-gray-700">{{ number_format($product->whole_price) }}</td>
                        <td class="p-1 text-sm text-right border dark:border-gray-700 uppercase">{{ number_format($product->whole_stock, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @empty($this->products->items())
        <x-empty>{{__('No products found!')}}</x-empty>
        @endempty
    </div>

    <div class="mt-6 space-y-4">
        @if (auth()->user()?->cart?->customer_id)
           <p class="flex gap-4">
             <span>Customer: </span>
             <span class="text-green-500 font-semibold">{{ auth()->user()?->cart?->customer?->name}}</span>

             <button wire:click="deleteCustomer"
                     class="text-xs font-semibold text-red-500 hover:text-red-400 underline underline-offset-4"
                     wire:confirm="{{__('Are you sure that you want to delete this customer?')}}"
            >Delete</button>
            </p>
        @else
            <livewire:pos.cart-create-customer />
        @endif

        <livewire:pos.cart-update-payment-method />

        <livewire:pos.cart-update-status />

        <div>
            <label for="transportFee" class="inline-flex items-center">
                <input id="transportFee" wire:model="transportFee" wire:change="chargeTransport" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-teal-600 shadow-sm focus:ring-teal-500 dark:focus:ring-teal-600 dark:focus:ring-offset-gray-800" name="transportFee">
                <span class="ms-2  text-gray-600 dark:text-gray-400">{{ __('Charge transport fee?') }}</span>
            </label>
        </div>

        <div class="flex justify-center">
            <button class="flex gap-2 items-center bg-indigo-600 text-white px-6 py-3 rounded-3xl hover:bg-indigo-500 hover:scale-x-105 transition-all duration-150 disabled:bg-indigo-600/20 disabled:text-white/50"
                    wire:loading.attr="disabled"
            >
            <span>{{__('Complete order')}}</span>
            <x-heroicon-m-arrow-path wire:loading class="size-4 animate-spin text-teal-500" />
        </button>
        </div>
    </div>
</div>

