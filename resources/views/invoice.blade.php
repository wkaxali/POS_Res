<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            width: 80mm; /* Adjust the width according to your thermal printer's paper size */
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            word-wrap: break-word; /* Ensures that long words are broken and don't overflow */
        }

        .invoice header,
        .invoice footer {
            padding: 5px;
            text-align: center;
            background-color: #f5f5f5;
        }

        .invoice section {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .total {
            font-weight: bold;
            font-size: 14px; /* Adjust the font size as needed */
        }
    </style>
</head>
<body>

<div class="invoice">
    <header>
        <h2>Restaurant Invoice</h2>
    </header>

    <section>
        <h3>Order Details</h3>
        <table>
            <thead>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ $item['price'] }}</td>
                    <td>${{ $item['quantity'] * $item['price'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

    <section>
        <h3>Payment Information</h3>
        <p class="total">Total Amount: ${{ $total }}</p>
    </section>

    <footer>
        <p>Thank you for dining with us!</p>
    </footer>
</div>

</body>
</html>
