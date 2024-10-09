<?php

use App\Http\Controllers\ExportController;
use App\Livewire\CreditSales;
use App\Livewire\Customers;
use App\Livewire\Damages;
use App\Livewire\Dashboard;
use App\Livewire\Expenses;
use App\Livewire\InvoiceDetail;
use App\Livewire\Invoices;
use App\Livewire\NewStocks;
use App\Livewire\PendingOrders;
use App\Livewire\PointOfSale;
use App\Livewire\Product;
use App\Livewire\Products\Imports\ImportProductFromBranch;
use App\Livewire\ProductsIventory;
use App\Livewire\Reports;
use App\Livewire\StockTransfers;
use App\Livewire\SystemSetup;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use function Spatie\LaravelPdf\Support\pdf;

Route::view('/', 'welcome');

Route::get('/pdf', function () {
     $data = ['name' => 'John Doe'];

        return pdf()
            ->view('pdf', $data)
            ->name('invoice-2023-04-10.pdf');
});

Route::get('dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('system-setup', SystemSetup::class)->name('setup');
    Route::get('products', Product::class)->name('products');
    Route::get('products/import-products-from-branch', ImportProductFromBranch::class)
        ->name('import-product-from-branch');
    Route::get('users', Users::class)->name('users');
    Route::get('customers', Customers::class)->name('customers');
    Route::get('point-of-sale', PointOfSale::class)->name('pos');
    Route::get('invoices', Invoices::class)->name('invoices');
    Volt::route('invoices/{invoice}', InvoiceDetail::class)->name('invoices.view');
    Route::get('pending-orders', PendingOrders::class)->name('pending-orders');
    Route::get('credit-sales', CreditSales::class)->name('credit-sales');
    Route::get('expenses', Expenses::class)->name('expenses');
    Route::get('stock-transfer', StockTransfers::class)->name('stock-transfer');
    Route::get('new-stock', NewStocks::class)->name('new-stock');
    Route::get('inventory-system', ProductsIventory::class)->name('inventory');
    Route::get('damages', Damages::class)->name('damages');
    Route::get('reports', Reports::class)->name('reports');
});


Route::controller(ExportController::class)->prefix('export/pdf')->middleware(['auth', 'verified'])->group(function () {
    Route::get('invoices', 'invoices')->name('export.invoices');
    Route::get('invoices/{invoice}', 'invoice')->name('export.invoice');
});


require __DIR__.'/auth.php';
