<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Component;

class InvoiceDetail extends Component
{
    public ?Order $invoice;

    public function mount(Order $invoice)
    {
        $this->invoice = Order::where('id', $invoice->id)->with(['orderItems.product', 'customer'])->first();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.invoice-detail');
    }
}
