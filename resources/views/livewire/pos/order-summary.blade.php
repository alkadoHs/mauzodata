<?php

use App\Models\Cart;

use function Livewire\Volt\{state, with};

with([
    'totalPrice' => auth()->user()->cartItems()->sum('total'),
    'totalTransport' => auth()->user()->cartItems()->sum('total_transport'),
]);

?>

<div class="relative max-h-dvh mt-4 space-y-4 bg-white dark:bg-transparent overflow-auto whitespace-nowrap">
    <table class="w-full border-collapse border dark:border-gray-700">
        <tbody class="text-gray-600 dark:text-gray-400">
            <tr class="transition-colors border-b dark:border-gray-700 hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                <td class="p-2 text-sm font-semibold">Total Price</td>
                <td class="p-2 text-sm text-right">{{ number_format($totalPrice, 2) }}</td>
            </tr>
            <tr class="transition-colors border-b dark:border-gray-700 hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                <td class="p-2 text-sm font-semibold">Total Transport Fee</td>
                <td class="p-2 text-sm text-right">{{ number_format($totalTransport, 2) }}</td>
            </tr>
            <tr class="transition-colors border-b dark:border-gray-700 hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                <td class="p-2 text-sm font-semibold">Price + transport </td>
                <td class="p-2 text-sm text-right">{{ number_format($totalPrice + $totalTransport, 2) }}</td>
            </tr>
        </tbody>
    </table>
</div>

@script
<script>
    console.log()
</script>
@endscript