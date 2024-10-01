<?php

use App\Models\CartItem;
use App\Models\Product;

use function Livewire\Volt\{state, mount, rules};

state([
    'qty' => 0,
    'cartItem' => null,
]);

rules([
    'qty' => "numeric|max:999999",
]);


mount(function (CartItem $item) {
    $this->qty = $item->qty;
    $this->cartItem = $item;
});

$updateCartItem = function () {
    $this->validate();
    
    $product = Product::find($this->cartItem->product_id);

    if($product->stock < $this->qty) {
        $this->qty = $this->cartItem->qty;
        session()->flash('error', "Stock is not enough. current stock for {$product->name} is: {$product->stock}");
    } else {
        if($this->qty > $product->whole_stock) {
            $this->cartItem->update(['qty' => $this->qty, 'price' => $product->whole_price]);
        } else {
            $this->cartItem->update(['qty' => $this->qty, 'price' => $product->sale_price]);
        }
    }

    $this->dispatch('cartItem-updated');
}

?>

<div>
    <input type="number" 
        class="py-0.5 max-w-24 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-teal-500 dark:focus:border-teal-600 focus:ring-teal-500 dark:focus:ring-teal-600 rounded-md shadow-sm"
        wire:model.live.debounce.1000ms="qty"
        wire:blur="updateCartItem"
        class="max-w-24 py-0" />
    <x-input-error :messages="$errors->get('qty')" class="mt-1" />
</div>
