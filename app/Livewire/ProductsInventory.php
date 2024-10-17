<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsInventory extends Component
{
    use WithPagination;
    
    #[Url()]
    public ?string $from_date;

    #[Url()]
    public ?string $to_date;

    #[Layout('layouts.app')]
    public function render()
    {
        $products = Product::withCount('orderItems')
                            ->withCount('stockTransferItems')
                            ->withCount('newStockItems')
                            ->withSum('orderItems', 'qty')
                            ->withSum('orderItems', 'total')
                            ->withSum('orderItems', 'v_qty')
                            ->withSum('orderItems', 'profit')
                            ->withAvg('orderItems', 'total')
                            ->withAvg('orderItems', 'profit')
                            ->withAvg('orderItems', 'qty')
                            ->paginate(15);

        return view('livewire.products-inventory', [
            'products' => $products,
        ]);
    }
}
