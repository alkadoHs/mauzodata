<?php

namespace App\Livewire\Reports;

use App\Models\Order;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class TimeRange extends Component
{
    public ?string $from_date = null;

    public ?string $to_date = null;

    #[Url()]
    public ?string $report_type = "monthly";
    
    #[Layout('layouts.app')]
    public function render()
    {
        $sales =  DB::table('orders')->select(
                DB::raw('DATE(orders.created_at) as date'), 
                DB::raw('COUNT(orders.id) as transaction_count'), // Number of transactions
                DB::raw('SUM(order_items.total) as total_sales'), // Total sales
                DB::raw('AVG(order_items.total) as avg_sales') // Average sale per transaction
            )
            ->join('order_items', 'orders.id', '=', 'order_items.order_id') // Join with order_items
            ->when($this->from_date && !$this->to_date, function (Builder $query) {
                $query->where('orders.created_at', '>=', $this->from_date);
            })
            ->when(!$this->from_date && $this->to_date, function (Builder $query) {
                $query->where('orders.created_at', '<=', $this->to_date);
            })
            ->when($this->from_date && $this->to_date, function (Builder $query) {
                $query->whereBetween('orders.created_at', [$this->from_date, $this->to_date]);
            })
            ->when($this->report_type === 'daily', function (Builder $query) {
                $query->whereDate('orders.created_at', now());
            })
            ->when($this->report_type === 'weekly', function (Builder $query) {
                $query->whereBetween('orders.created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            })
            ->when($this->report_type === 'monthly', function (Builder $query) {
                $query->whereMonth('orders.created_at', now()->month)
                    ->whereYear('orders.created_at', now()->year);
            })
            ->when($this->report_type === 'yearly', function (Builder $query) {
                $query->whereYear('orders.created_at', now()->year);
            })
            ->groupBy(DB::raw('DATE(orders.created_at)')) // Group by day
            ->orderBy('orders.created_at', 'desc') // Order by date
            ->get();

        return view('livewire.reports.time-range', [
            'sales' => $sales
        ]);
    }
}
