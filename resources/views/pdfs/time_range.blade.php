<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-size: 12px;
        }

        h1 {
            text-align: center;
            color: #4a4a4a;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px 10px;
            border: 1px solid #dddddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Optional Footer styles */
        tfoot {
            font-weight: bold;
            background-color: #f4f4f4;
        }

        /* Add some spacing and nice design to the table header */
        thead {
            background-color: #3f51b5; /* Indigo color */
            color: white;
        }
        
        thead th {
            text-align: center;
        }

        /* Small padding for better alignment in PDF */
        table, th, td {
            border: 1px solid #dddddd;
            border-collapse: collapse;
        }

        /* Styling the footer content */
        tfoot td {
            text-align: right;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>{{ $report_type . date('d-m-Y') . " sales report"}}</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Total Sales</th>
                <th># of Transactions</th>
                <th>Avg Sale/Txn</th>
            </tr>
        </thead>
        <tbody>
             @php
             $total = 0;
             $transactions = 0;
             $avg =0;
             @endphp
             @foreach ($sales as $sale)
               @php
                 $total += $sale->total_sales;
                 $transactions += $sale->transaction_count;
                 $avg += $sale->avg_sales;
               @endphp
                <tr class="md__tr" wire:key="$sale->id">
                    <td>{{ date('d-m-Y', strtotime($sale->date))}}</td>
                    <td>{{ number_format($sale->total_sales, 2)}}</td>
                    <td>{{ number_format($sale->transaction_count, 2)}}</td>
                    <td>{{ number_format($sale->avg_sales, 2)}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td>Total</td>
                <td>{{ number_format($total)}}</td>
                <td>{{ number_format($transactions)}}</td>
                <td>{{ number_format($avg)}}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
