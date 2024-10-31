<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfReports extends Controller
{
    public function time_range_sales()
    {
        $from_date = request()->from_date ?? null;
        $to_date = request()->to_date ?? null;
        $report_type = request()->report_type ?? null;

        $sales =  DB::table('orders')->select(
                DB::raw('DATE(orders.created_at) as date'), 
                DB::raw('COUNT(orders.id) as transaction_count'), // Number of transactions
                DB::raw('SUM(order_items.total) as total_sales'), // Total sales
                DB::raw('AVG(order_items.total) as avg_sales') // Average sale per transaction
            )
            ->join('order_items', 'orders.id', '=', 'order_items.order_id') // Join with order_items
            ->when($from_date && !$to_date, function (Builder $query) use($from_date, $to_date) {
                $query->where('orders.created_at', '>=', $from_date);
            })
            ->when(!$from_date && $to_date, function (Builder $query) use($from_date, $to_date) {
                $query->where('orders.created_at', '<=', $to_date);
            })
            ->when($from_date && $to_date, function (Builder $query) use($from_date, $to_date) {
                $query->whereBetween('orders.created_at', [$from_date, $to_date]);
            })
            ->when($report_type === 'daily', function (Builder $query) {
                $query->whereDate('orders.created_at', now());
            })
            ->when($report_type === 'weekly', function (Builder $query) {
                $query->whereBetween('orders.created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            })
            ->when($report_type === 'monthly', function (Builder $query) {
                $query->whereMonth('orders.created_at', now()->month)
                    ->whereYear('orders.created_at', now()->year);
            })
            ->when($report_type === 'yearly', function (Builder $query) {
                $query->whereYear('orders.created_at', now()->year);
            })
            ->groupBy(DB::raw('DATE(orders.created_at)')) // Group by day
            ->orderBy('orders.created_at', 'desc') // Order by date
            ->get();

        $pdf = Pdf::loadView('pdfs.time_range', ['sales' => $sales, 'report_type'=> $report_type]);
        $date = date('d-m-Y');
        return $pdf->download("{$report_type}.{$date}-sales");

    }
}
