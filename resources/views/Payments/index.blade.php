<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments List</title>
    
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #e9ecef;
            color: #495057;
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tbody tr:hover {
            background-color: #e2e6ea;
        }
        .btn, .btn-add {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #ffc107;
            border-color: #e0a800;
            color: #212529;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .btn-delete {
            background-color: #dc3545;
            border-color: #c82333;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .btn-add {
            background-color: #28a745;
            border-color: #218838;
            padding: 8px 15px;
            margin-bottom: 20px;
        }
        .btn-add:hover {
            background-color: #218838;
        }
        td form { margin: 0; }
    </style>
</head>
<body>
<div class="container">
    <h1>Payment Screen</h1>

    
    <a href="{{ route('payments.create') }}" class="btn btn-add">Add New Payment</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Payer Name</th>
                <th>Payer Email</th>
                <th>Payment Type</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($payments->isEmpty())
                <tr>
                    <td colspan="7">No payments found.</td> {{-- Adjust colspan if you add more columns --}}
                </tr>
            @else
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->payer_name }}</td>
                        <td>{{ $payment->payer_email }}</td>
                        <td>{{ $payment->payment_type }}</td>
                        <td>{{ number_format($payment->amount, 2) }}</td> {{-- Format amount as currency --}}
                        <td>{{ $payment->payment_date->format('Y-m-d') }}</td> {{-- Format date --}}
                        <td>
                            <a href="{{ route('payments.edit', ['payment' => $payment->id]) }}" class="btn btn-edit">Edit</a>

                            <form action="{{ route('payments.destroy', ['payment' => $payment->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this payment?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
</body>
</html>