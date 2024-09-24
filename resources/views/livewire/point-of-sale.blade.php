<div clss="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Point of sale(POS)')}}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="min-h-48 max-h-60 overflow-auto p-2 bg-white dark:bg-gray-200/10">
                <p class="pl-1 font-bold text-white/80 bg-green-600/80">Cart Items</p>
                <livewire:pos.cart-items />
            </div>
            <div class="min-h-48 p-2 bg-white dark:bg-gray-200/10">
                <p class="pl-1 font-bold text-white bg-teal-600">Products & order details</p>
                <livewire:pos.order-details />
            </div>
            <div class="min-h-48 p-2 col-span-1 md:col-span-2 bg-white dark:bg-gray-200/10">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="bg-green-100 md:mr-6">Cart Items calculations</div>
                    <div class="bg-green-100 md:ml-6">Order Detais sumup</div>
                </div>
            </div>
        </div>
    </div>
</div>