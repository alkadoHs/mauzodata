<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class Dashboard extends Component
{
    #[Url()]
    public ?string $from_date = null;

    #[Url()]
    public ?string $to_date = null;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.dashboard', [
            'sales' => OrderItem::sum('total'),
            'profit' => OrderItem::sum('profit'),
            'capital' => Product::sum('capital'),
        ]);
    }
}
