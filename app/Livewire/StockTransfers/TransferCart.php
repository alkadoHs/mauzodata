<?php

namespace App\Livewire\StockTransfers;

use App\Models\Branch;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TransferCart extends Component
{
    #[Url()]
    #[Validate('required')]
    public $branch_id = null;

    public function render()
    {
        return view('livewire.stock-transfers.transfer-cart', [
            'branches' => Branch::where('id', '!=', auth()->user()->branch_id)->get(),
        ]);
    }
}
