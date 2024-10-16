<div>
    <div class="md__table_wrapper">
        <table class="md__table">
            <thead class="md__thead">
                <tr>
                    <th class="md__th text-left">{{ __('Product') }}</th>
                    <th class="md__th text-left">{{ __('Stock')}}</th>
                    <th class="md__th"></th>
                </tr>
            </thead>
            <tbody class="md__tbody">
                @foreach ($this->newStocks as $newstock)
                    <tr class="md__tr" wire:key="$newstock->id">
                        <td class="md__td">{{ $newstock?->product?->name }}</td>
                        <td class="md__td">
                            <livewire:new-stocks.edit-stock-new-stock :key="$newstock->id" :item="$newstock" />
                        </td>
                        <td class="md__td">
                            <button wire:click="delete({{ $newstock->id }})"
                                    wire:confirm="Are you sure you want to delete this item? ">
                                <x-heroicon-o-trash class="size-5 hover:fill-current" />
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @empty($this->newStocks->items())
            <x-empty>{{__('No new stocks!')}}</x-empty>
        @endempty
    </div>
    <div class="py-2">
        {{ $this->newStocks->links() }}
    </div>

     <div class="flex items-end gap-4">
         <div class="space-y-1.5 w-full" wire:lazy>
            <x-input-label for="branch_id" value="{{ __('Destination branch') }}" />
            <select name="branch_id"
                    wire:model="branch_id"
                    wire:change="saveBranchId()"
                    class="w-full py-1.5 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-cyan-500 dark:focus:border-cyan-600 focus:ring-cyan-500 dark:focus:ring-cyan-600 rounded-md shadow-sm"
                    >
                <option @disabled($branch_id) value="">{{ __('To branch')}}</option>
                @foreach ($branches as $branch)
                    <option wire:key="$branch->id" value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('branch_id')" class="mt-1" />
         </div>

         <div>
            <x-primary-button wire:click="newstock">{{__('submit')}}</x-primary-button>
         </div>
     </div>

</div>
