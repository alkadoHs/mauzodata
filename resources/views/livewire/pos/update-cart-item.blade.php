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
    $product = Product::find($this->cartItem->product_id);

    if($product->stock < $this->qty) {
        $this->qty = $this->cartItem->qty;
        session()->flash('error', "Stock is not enough. current stock for {$product->name} is: {$product->stock}");
    } else {
        if($this->qty > $product->whole_stock) {
            $this->cartItem->update(['qty' => $this->qty, 'price' => $product->whole_price]);
        } else {
            $this->cartItem->update(['qty' => $this->qty]);
        }
    }

    $this->dispatch('cartItem-updated');
}

?>

<div>
    <x-text-input type="number" 
        wire:model.live.debounce.1000ms="qty"
        wire:blur="updateCartItem"
        class="max-w-20 py-0" />
    <x-input-error :messages="$errors->get('qty')" class="mt-1" />
</div>
