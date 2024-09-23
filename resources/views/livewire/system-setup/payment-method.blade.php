<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Payment methods') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('List of accounts used to receive payments.') }}
        </p>
    </header>

    <div class="my-2">
        <livewire:system-setup.create-payment-method />
    </div>

    <div class="mt-6 space-y-6 overflow-x-auto">
        <table class="w-full border-collapse border dark:border-gray-700">
            <thead class="dark:text-gray-300">
                <tr>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">S/N</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">NAME</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">DATE</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700"></th>
                </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-400">
                @php
                $rowId = 1;
                @endphp
                @foreach ($paymentMethods as $paymentMethod)
                    <tr wire:key="{{ $paymentMethod->id }}">
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $rowId++ }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $paymentMethod->name }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">{{ date('d/m/Y', strtotime($paymentMethod->created_at)) }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">
                            <div class="flex items-center gap-2">
                                <button wire:click="deletePayment({{$paymentMethod->id}})" 
                                        wire:confirm.prompt="Are you sure that you want to delete - {{ $paymentMethod->name }}?\n\nType DELETE to confirm|DELETE"
                                >
                                    <x-heroicon-o-trash class="size-5 text-red-500" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
