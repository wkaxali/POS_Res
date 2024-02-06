<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>Order Placed</title>
    <style>
        body {
            background-color: #f2f2f2;
            color: #333;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .order-container {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #555;
        }

        .food-preparation {
            margin-top: 20px;
            position: relative;
            width: 100px;
            height: 100px;
        }

        .food-preparation:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            border: 5px solid #ccc;
            border-radius: 50%;
            border-top-color: #555;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
    </style>
</head>
<body>

<div class="order-container">
    <h1>Order Placed</h1>
    
    <p>Thank you for your order!</p>

    <div>
        <strong>Order ID: {{ $invoiceData['invoiceNumber'] }}</strong>
    </div>

    <div>
        <strong>Customer Information:</strong><br>
        Name: {{ $invoiceData['customerName'] }}<br>
    </div>

    <div class="food-preparation"></div>
</div>

</body>
</html>
