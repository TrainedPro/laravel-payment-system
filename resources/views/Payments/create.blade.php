<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Payment</title>
   
     <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        form div {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #495057;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input:focus, select:focus {
             border-color: #80bdff;
             outline: 0;
             box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            background-color: #28a745;
            border-color: #218838;
        }
        button:hover {
            background-color: #218838;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Add New Payment</h1>

     <a href="{{ route('payments.index') }}" class="back-link">&laquo; Back to Payments List</a>

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf

        <div>
            <label for="payer_name">Payer Name:</label>
            <input type="text" name="payer_name" id="payer_name" required>
        </div>

        <div>
            <label for="payer_email">Payer Email:</label>
            <input type="email" name="payer_email" id="payer_email" required>
        </div>

        <div>
            <label for="payment_type">Payment Type:</label>
            <select name="payment_type" id="payment_type" required>
                <option value="">-- Select Type --</option>
                <option value="Tuition Fee">Tuition Fee</option>
                <option value="Fine Fee">Fine Fee</option>
            </select>
        </div>

        <div>
            <label for="payment_date">Payment Date:</label>
            <input type="date" name="payment_date" id="payment_date" required>
        </div>

        <div>
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" min="0" required>
        </div>

        <button type="submit">Save Payment</button>
    </form>
</div>
</body>
</html>