<div>
    <div class="space-y-1.5 w-full" wire:lazy>
        <x-input-label for="branch_id" value="{{ __('Transfer to branch') }}" />
        <select name="branch_id"
                wire:model.live.debounce.1000ms="branch_id"
                class="w-full py-1.5 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-cyan-500 dark:focus:border-cyan-600 focus:ring-cyan-500 dark:focus:ring-cyan-600 rounded-md shadow-sm"
                >
            <option value="">{{ __('To branch')}}</option>
            @foreach ($branches as $branch)
                <option wire:key="$branch->id" value="{{ $branch->id }}">{{ $branch->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('branch_id')" class="mt-1" />
    </div>

    <div class="md__table_wrapper">
        <table class="md__table">
            <thead class="md__thead">
                <tr>
                    <th class="md__th text-left">{{ __('Product') }}</th>
                    <th class="md__th text-left">{{ __('Stock')}}</th>
                </tr>
            </thead>
            <tbody class="md__tbody">
                {{-- @foreach ($products as $product)
                    <tr class="md__tr" wire:key="$product->id">
                        <td class="md__td">{{ $product->name }}</td>
                        <td class="md__td">{{ number_format($product->stock)}}</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
