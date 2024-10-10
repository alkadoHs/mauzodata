<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class StockTransfers extends Component
{
    use WithPagination;

    public ?string $search = null;
    
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.stock-transfer', [
            'products' => Product::where('branch_id', auth()->user()->branch_id)
                                    ->where('name', 'LIKE', "%{$this->search}%")
                                    ->paginate(10),
        ]);
    }
}
