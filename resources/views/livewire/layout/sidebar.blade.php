<?php

use function Livewire\Volt\{state};

//

?>

<div class="h-dvh overflow-hidden pb-5 ">
    <div class="pb-3 flex justify-center items-center">
        <div class="size-16 rounded-lg bg-gray-700/10">
            <img src="{{ asset('logo.png')}}" loading="lazy" alt="logo">
        </div>
    </div>

    <div class="pl-4 pb-4 max-h-[80dvh] grid gap-1  overflow-y-auto">
        <x-sidebar-item :url="route('dashboard')" :active="request()->routeIs('dashboard')">
            <x-slot:icon>
                <x-heroicon-o-home />
            </x-slot:icon>
    
            Dashboard
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('setup')" :active="request()->routeIs('setup')">
            <x-slot:icon>
                <x-heroicon-o-cog-6-tooth />
            </x-slot:icon>
    
            System Setup
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('products')" :active="request()->routeIs('products')">
            <x-slot:icon>
                <x-heroicon-o-book-open />
            </x-slot:icon>
    
            Products
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('users')" :active="request()->routeIs('users')">
            <x-slot:icon>
                <x-heroicon-o-users />
            </x-slot:icon>
    
            Users (Employees)
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('customers')" :active="request()->routeIs('customers')">
            <x-slot:icon>
                <x-heroicon-o-user />
            </x-slot:icon>
    
            Customers
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('pos')" :active="request()->routeIs('pos')">
            <x-slot:icon>
                <x-heroicon-o-shopping-cart />
            </x-slot:icon>
    
            {{__('Point of Sale')}}(POS)
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('invoices')" :active="request()->routeIs('invoices')">
            <x-slot:icon>
                <x-heroicon-o-document-arrow-down />
            </x-slot:icon>
    
            {{__('Invoices')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('pending-orders')" :active="request()->routeIs('pending-orders')">
            <x-slot:icon>
                <x-heroicon-o-shopping-bag />
            </x-slot:icon>
    
            {{__('Pending orders')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('credit-sales')" :active="request()->routeIs('credit-sales')">
            <x-slot:icon>
                <x-heroicon-o-rectangle-stack />
            </x-slot:icon>
    
            {{__('Credit sales')}}
        </x-sidebar-item>
    
         <x-sidebar-item :url="route('expenses')" :active="request()->routeIs('expenses')">
            <x-slot:icon>
                <x-heroicon-o-wallet />
            </x-slot:icon>
    
            {{__('Expenses')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('stock-transfer')" :active="request()->routeIs('stock-transfer')">
            <x-slot:icon>
                <x-heroicon-o-receipt-refund />
            </x-slot:icon>
    
            {{__('Stock transfer')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('new-stock')" :active="request()->routeIs('new-stock')">
            <x-slot:icon>
                <x-heroicon-o-squares-plus />
            </x-slot:icon>
    
            {{__('New stocks')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('inventory')" :active="request()->routeIs('inventory')">
            <x-slot:icon>
                <x-heroicon-o-scale />
            </x-slot:icon>
    
            {{__('Stocks Inventory')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('damages')" :active="request()->routeIs('damages')">
            <x-slot:icon>
                <x-heroicon-o-trash />
            </x-slot:icon>
    
            {{__('Damaged products')}}
        </x-sidebar-item>
    
        <x-sidebar-item :url="route('reports')" :active="request()->routeIs('reports')">
            <x-slot:icon>
                <x-heroicon-m-document-chart-bar />
            </x-slot:icon>
    
            {{__('Reports')}}
        </x-sidebar-item>
    </div>

    <!-- Today Report -->
    <a href="" class="py-3 bg-green-600">
    <!-- Uploading File Content -->
    <div class="mb-2 flex justify-between items-center">
        <div class="flex items-center gap-x-3">
        <span class="size-8 flex justify-center items-center border border-gray-200 text-gray-500 rounded-lg dark:border-neutral-700 dark:text-neutral-500">
            <svg class="shrink-0 size-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.0243 1.43996H7.08805C6.82501 1.43996 6.57277 1.54445 6.38677 1.73043C6.20077 1.91642 6.09631 2.16868 6.09631 2.43171V6.64796L15.0243 11.856L19.4883 13.7398L23.9523 11.856V6.64796L15.0243 1.43996Z" fill="#21A366"></path>
            <path d="M6.09631 6.64796H15.0243V11.856H6.09631V6.64796Z" fill="#107C41"></path>
            <path d="M22.9605 1.43996H15.0243V6.64796H23.9523V2.43171C23.9523 2.16868 23.8478 1.91642 23.6618 1.73043C23.4758 1.54445 23.2235 1.43996 22.9605 1.43996Z" fill="#33C481"></path>
            <path d="M15.0243 11.856H6.09631V21.2802C6.09631 21.5433 6.20077 21.7955 6.38677 21.9815C6.57277 22.1675 6.82501 22.272 7.08805 22.272H22.9606C23.2236 22.272 23.4759 22.1675 23.6618 21.9815C23.8478 21.7955 23.9523 21.5433 23.9523 21.2802V17.064L15.0243 11.856Z" fill="#185C37"></path>
            <path d="M15.0243 11.856H23.9523V17.064H15.0243V11.856Z" fill="#107C41"></path>
            <path opacity="0.1" d="M12.5446 5.15996H6.09631V19.296H12.5446C12.8073 19.2952 13.0591 19.1904 13.245 19.0046C13.4308 18.8188 13.5355 18.567 13.5363 18.3042V6.1517C13.5355 5.88892 13.4308 5.63712 13.245 5.4513C13.0591 5.26548 12.8073 5.16074 12.5446 5.15996Z" fill="black"></path>
            <path opacity="0.2" d="M11.8006 5.90396H6.09631V20.04H11.8006C12.0633 20.0392 12.3151 19.9344 12.501 19.7486C12.6868 19.5628 12.7915 19.311 12.7923 19.0482V6.8957C12.7915 6.6329 12.6868 6.38114 12.501 6.19532C12.3151 6.0095 12.0633 5.90475 11.8006 5.90396Z" fill="black"></path>
            <path opacity="0.2" d="M11.8006 5.90396H6.09631V18.552H11.8006C12.0633 18.5512 12.3151 18.4464 12.501 18.2606C12.6868 18.0748 12.7915 17.823 12.7923 17.5602V6.8957C12.7915 6.6329 12.6868 6.38114 12.501 6.19532C12.3151 6.0095 12.0633 5.90475 11.8006 5.90396Z" fill="black"></path>
            <path opacity="0.2" d="M11.0566 5.90396H6.09631V18.552H11.0566C11.3193 18.5512 11.5711 18.4464 11.757 18.2606C11.9428 18.0748 12.0475 17.823 12.0483 17.5602V6.8957C12.0475 6.6329 11.9428 6.38114 11.757 6.19532C11.5711 6.0095 11.3193 5.90475 11.0566 5.90396Z" fill="black"></path>
            <path d="M1.13604 5.90396H11.0566C11.3195 5.90396 11.5718 6.00842 11.7578 6.19442C11.9438 6.38042 12.0483 6.63266 12.0483 6.8957V16.8162C12.0483 17.0793 11.9438 17.3315 11.7578 17.5175C11.5718 17.7035 11.3195 17.808 11.0566 17.808H1.13604C0.873012 17.808 0.620754 17.7035 0.434765 17.5175C0.248775 17.3315 0.144287 17.0793 0.144287 16.8162V6.8957C0.144287 6.63266 0.248775 6.38042 0.434765 6.19442C0.620754 6.00842 0.873012 5.90396 1.13604 5.90396Z" fill="#107C41"></path>
            <path d="M2.77283 15.576L5.18041 11.8455L2.9752 8.13596H4.74964L5.95343 10.5071C6.06401 10.7318 6.14015 10.8994 6.18185 11.01H6.19745C6.27683 10.8305 6.35987 10.6559 6.44669 10.4863L7.73309 8.13596H9.36167L7.09991 11.8247L9.41897 15.576H7.68545L6.29489 12.972C6.22943 12.861 6.17387 12.7445 6.12899 12.6238H6.10817C6.06761 12.7419 6.01367 12.855 5.94748 12.9608L4.51676 15.576H2.77283Z" fill="white"></path>
            </svg>
        </span>
        <div>
            <p class="text-sm font-medium text-gray-800 dark:text-white">my-report.xls</p>
            <p class="text-xs text-gray-500 dark:text-neutral-500">7 KB</p>
        </div>
        </div>
        <div class="inline-flex items-center gap-x-2">
        <span class="relative">
            <svg class="shrink-0 size-4 text-teal-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
            </svg>
            <span class="sr-only">Success</span>
        </span>
        <button type="button" class="relative text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 6h18"></path>
            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
            <line x1="10" x2="10" y1="11" y2="17"></line>
            <line x1="14" x2="14" y1="11" y2="17"></line>
            </svg>
            <span class="sr-only">Delete</span>
        </button>
        </div>
    </div>
    <!-- End Uploading File Content -->

    <!-- Progress Bar -->
    <div class="flex items-center gap-x-3 whitespace-nowrap">
        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-teal-500 text-xs text-white text-center whitespace-nowrap transition duration-500" style="width: 100%"></div>
        </div>
        <div class="w-6 text-end">
        <span class="text-sm text-gray-800 dark:text-white">100%</span>
        </div>
    </div>
    <!-- End Progress Bar -->
    </a>
    <!-- End of today report -->
</div>
