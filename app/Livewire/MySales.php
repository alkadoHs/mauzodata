<?php

namespace App\Livewire;

use App\Models\ExpenseItem;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MySales extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.my-sales', [
            'sales' => OrderItem::whereRelation('order', 'user_id', auth()->user()->id)
                                  ->whereDate('created_at', today())
                                  ->sum('total'),


            'expenses' => ExpenseItem::whereRelation('expense','user_id', auth()->user()->id)
                                  ->whereDate('created_at', today())
                                  ->sum('cost'),

            'products'  => OrderItem::with(['product'])->select('product_id', DB::raw('SUM(qty)  as total_qty'), DB::raw('SUM(total)  as total_price'))
                                ->whereRelation('order', 'user_id', auth()->id())
                                ->whereDate('created_at', today())
                                ->orderByDesc('created_at')
                                ->groupBy(['product_id'])->get(),
        ]);
    }
}
