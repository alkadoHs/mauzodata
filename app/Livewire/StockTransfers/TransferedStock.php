<?php

namespace App\Livewire\StockTransfers;

use App\Models\StockTransfer;
use Livewire\Component;

class TransferedStock extends Component
{
    public function render()
    {
        return view('livewire.stock-transfers.transfered-stock', [
            'transfers' => StockTransfer::paginate(15),
        ]);
    }
}
