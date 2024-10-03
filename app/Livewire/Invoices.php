<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination;


    #[Computed(seconds: 10)]
    public function invoices()
    {
        return Order::withSum('orderItems', 'total')->with(['customer', 'branch', 'paymentMethod', 'user', 'vendor'])->paginate(15);
    }
    

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.invoices', [
            'total' => Order::count(),
            'pending' => Order::where('status', 'pending')->count(),
            'credit' => Order::where('status', 'credit')->count(),
        ]);
    }
}
