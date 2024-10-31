<div>
    <x-slot name="header">
        <div class="flex justify-end gap-4">
            <a href="{{ url()->previous()}}" wire:navigate>
                <x-heroicon-o-arrow-left-circle class="size-6 hover:fill-current" />
            </a>
            <h2 class="font-semibold text-xl text-gray-200 leading-tight mr-auto">
                {{__('Daily, Weekly, Mothly and Yearly Report')}}
            </h2>

            <a href="{{ route('reports.pdf.time-range', ['from_date' => $from_date, 'to_date' => $to_date, 'report_type' => $report_type])}}" class="hover:text-cyan-600" id="print">
                <span class="sr-only">Print items</span>
                <x-heroicon-o-printer class="size-6" />
            </a>
        </div>
    </x-slot>

    <section class="max-w-2xl my-6">
        <div class="space-y-1.5 w-full">
            <select name="report_type"
                    wire:model.live.debounce.1000ms="report_type"
                    class="w-full py-1.5 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-cyan-500 dark:focus:border-cyan-600 focus:ring-cyan-500 dark:focus:ring-cyan-600 rounded-md shadow-sm"
                    >
                <option value="daily">{{ __('Daily')}}</option>
                <option value="weekly">{{ __('Weekly') }}</option>
                <option value="monthly">{{ __('Monthly') }}</option>
                <option value="yearly">{{ __('Yearly') }}</option>
            </select>
        </div>
        <div class="md__table_wrapper">
            <table class="md__table">
                <thead class="md__thead">
                    <tr>
                        <th class="md__th">Date</th>
                        <th class="md__th text-right">Total Sales</th>
                        <th class="md__th text-right"># of Transactions</th>
                        <th class="md__th text-right">Avg Sale/Txn</th>
                    </tr>
                </thead>
                <tbody class="md__tbody">
                    @foreach ($sales as $sale)
                        <tr class="md__tr" wire:key="$sale->id">
                            <td class="md__td text-center">{{ date('d-m-Y', strtotime($sale->date))}}</td>
                            <td class="md__td text-right">{{ number_format($sale->total_sales, 2)}}</td>
                            <td class="md__td text-right">{{ number_format($sale->transaction_count, 2)}}</td>
                            <td class="md__td text-right">{{ number_format($sale->avg_sales, 2)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
