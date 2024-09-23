<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Branches') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('The list of your shops and stores of your company.') }}
        </p>
    </header>

    <div class="my-2">
        <livewire:system-setup.create-branch />
    </div>

    <div class="mt-6 space-y-6 overflow-x-auto">

        <table class="w-full border-collapse border dark:border-gray-700">
            <thead class="dark:text-gray-300">
                <tr>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">S/N</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">NAME</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">PHONE</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">ADDRESS</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700">TAX ID</th>
                    <th class="p-2 text-sm text-left border dark:border-gray-700"></th>
                </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-400">
                @php
                $rowId = 1;
                @endphp
                @foreach ($branches as $branch)
                    <tr wire:key="{{ $branch->id }}">
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $rowId++ }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $branch->name }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $branch->phone }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $branch->address }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">{{ $branch->taxt_id }}</td>
                        <td class="p-2 text-sm border dark:border-gray-700">
                            <div class="flex items-center gap-2">
                                <livewire:system-setup.update-branch :branch="$branch" :key="$branch->id" />
                                <button wire:click="deleteBranch({{$branch->id}})" 
                                        wire:confirm.prompt="Are you sure that you want to delete - {{ $branch->name }}?\n\nType DELETE to confirm|DELETE"
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
