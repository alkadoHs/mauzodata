<?php

use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;

use function Livewire\Volt\{state, mount, usesPagination, computed};

usesPagination();

state(['search' => '']);

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
        $newCart = Cart::create(['user_id', auth()->id()]);

        $newCart->cartItems()->create([
            'product_id' => $product->id,
            'buy_price' => $product->buy_price,
            'price' => $product->sale_price,
            'qty' => 1,
            'transport' => $product->transport,
        ]);

        session('success', 'New cart created. Product added to the cart.');
    }

    $this->dispatch('added-to-cart');
}

?>

<div>
    <div class="my-2 w-full">
        <x-text-input type="search" class="w-full" name="search" wire:model.live.debounce.1000ms="search" placeholder="Search product" />
    </div>
    <div class="relative max-h-dvh space-y-4 bg-white dark:bg-gray-100/10 overflow-auto whitespace-nowrap" wire:lazy>
        <table class="w-full border-collapse border dark:border-gray-700">
            <thead class="dark:text-gray-300">
                <tr class=" z-10">
                    <th class="1 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Product')}}</th>
                    <th class="1 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Stock')}}</th>
                    <th class="1 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Selling price')}}</th>
                    <th class="1 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('W.Price')}}</th>
                    <th class="1 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('W.Stock')}}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-400">
                @foreach ($this->products as $product)
                    <tr wire:key="{{ $product->id }}" 
                        wire:click="addToCart({{$product->id}})"
                        class="transition-all duration-150 cursor-pointer hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                        <td class="p-1 text-sm border dark:border-gray-700">
                                {{ $product?->name }}
                        </td>
                        <td class="p-1 text-right border dark:border-gray-700">
                            {{ number_format($product->stock,2)}}
                        </td>
                        <td class="p-1 text-sm text-right border dark:border-gray-700">{{ number_format($product->sale_price,2 ) }}</td>
                        <td class="p-1 text-sm text-right border dark:border-gray-700">{{ number_format($product->whole_price, 2) }}</td>
                        <td class="p-1 text-sm text-right border dark:border-gray-700 uppercase">{{ number_format($product->whole_stock, 2) }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        @empty($this->products())
        <x-empty>{{__('No cart products found!')}}</x-empty>
        @endempty
    </div>
</div>

