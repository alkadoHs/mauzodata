<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Http\Request;


class ExportController extends Controller
{
    public function invoice(Order $invoice)
    {
        $invoice_ = Order::where('id', $invoice->id)->with(['orderItems.product', 'customer'])->first();
        return view('pdfs.invoice', ['invoice' => $invoice_]);
    }
}
