<?php

namespace App\Livewire\CreditSales;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreditSaleDetail extends Component
{
    public  $order = null;

    #[Validate('required|numeric|max:999999999|min:0')]
    public $amount;

    public function mount(Order $order)
    {
        $this->order = Order::withSum('orderItems', 'total')->where('id', $order->id)->with(['orderItems.product', 'customer', 'user'])->first();
    }

    public function payDebt()
    {
        //payment process
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.credit-sales.credit-sale-detail');
    }
}
