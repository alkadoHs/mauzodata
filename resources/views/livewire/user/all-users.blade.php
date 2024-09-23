<section>
    <div class="sm:px-6 lg:px-4 space-y-6">
        <div class="my-2 space-y-4">
            <div class="flex justify-between gap-4">
                <x-text-input type="search" name="search" wire:model.live.debounce.1000ms="search" placeholder="Search product ..." />
                
                <livewire:user.create-user />
            </div>
    
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-between gap-4">
                <div class="flex shrink-0 items-center gap-3 overflow-y-auto whitespace-nowrap">
                    <button class="rounded-2xl cursor-pointer select-none dark:text-gray-950 bg-green-400 px-4 py-1 text-sm">
                       All. {{ number_format($total) }}
                    </button>
                    <x-filter-tab variant="warning" wire:lazy>Low. 0</x-filter-tab>
                    <x-filter-tab variant="danger" wire:lazy>Exp. 67</x-filter-tab>
                    <x-filter-tab wire:lazy>Empty. 6</x-filter-tab>
                </div>

                <div class="flex items-center shrink-0 gap-4 lg:justify-end">
                    <x-secondary-button>Filter by branch</x-secondary-button>
                    

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <x-icon-button class="p-0.5" title="{{ __('Import users from another branch')}}">
                                <x-heroicon-o-folder-arrow-down class="size-6" />
                            </x-icon-button>
                        </x-slot>

                        <x-slot name="content">
                            <button>
                                <x-dropdown-link class="w-full text-start" :href="route('import-product-from-branch')">
                                    <x-heroicon-m-arrow-right-circle class="size-4 mr-2" />
                                    {{ __('Import from branch') }}
                                </x-dropdown-link>
                            </button>

                            <!-- Authentication -->
                            <button wire:confirm="We are working on this feature." class="w-full text-start">
                                <x-dropdown-link>
                                    <x-heroicon-m-document-text class="size-4 text-teal-400 mr-2" />
                                    {{ __('Import from excel') }}
                                </x-dropdown-link>
                            </button>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
        <div class="relative max-h-dvh mt-4 space-y-4 bg-white dark:bg-gray-100/10 overflow-auto whitespace-nowrap" wire:lazy>
            <table class="w-full border-collapse border dark:border-gray-700">
                <thead class="dark:text-gray-300">
                    <tr class=" z-10">
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700  bg-white dark:bg-gray-800 sticky left-0 top-0 z-20">S/N</th>
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Name')}}</th>
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Phone')}}</th>
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Email')}}</th>
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Branch')}}</th>
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Role')}}</th>
                        <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Status')}}</th>
                        <th class="p-2 text-xs text-left border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 dark:text-gray-400">
                    @php
                    $rowId = 1;
                    @endphp
                    @foreach ($this->users as $user)
                        <tr wire:key="{{ $user->id }}" class="transition-colors hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                            <td class="p-2 text-sm border dark:border-gray-700 bg-white dark:bg-gray-800 sticky left-0"">{{ $rowId++ }}</td>
                            <td class="p-2 text-sm border dark:border-gray-700">
                                <div class="flex items-center gap-2">
                                    <img class="size-7 rounded-full" src="{{ $user->avatar ? asset("storage/{$user->avatar}"): asset('logo1.png')}}" alt="{{$user->name}}">
                                    <span>{{ $user->name }}</span>
                                </div>
                            </td>
                            <td class="p-2 text-sm border dark:border-gray-700">{{ $user->phone ?? '-'}}</td>
                            <td class="p-2 text-sm border dark:border-gray-700">{{ $user->email }}</td>
                            <td class="p-2 text-sm border dark:border-gray-700">{{ $user?->branch?->name ?? "-" }}</td>
                            <td class="p-2 text-sm border dark:border-gray-700 uppercase">{{ $user?->role }}</td>
                            <td class="p-2 text-sm border dark:border-gray-700">{{ $user->isAdmin }}</td>
                            <td class="p-2 text-sm border dark:border-gray-700">
                                <div class="flex items-center gap-3">
                                    <livewire:user.edit-user :user="$user" :key="$user->id"  />
                                    
                                    <button wire:click="deleteUser({{$user->id}})" 
                                            wire:confirm.prompt="Are you sure that you want to delete - {{ $user->name }}?\n\nType DELETE to confirm|DELETE"
                                    >
                                        <x-heroicon-o-trash class="size-5 text-red-500" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            @empty($this->users->items())
            <x-empty>{{__('No users found!')}}</x-empty>
            @endempty
        </div>
        <div class="my-2">
            {{ $this->users->links()}}
        </div>
    </div>
</section>

