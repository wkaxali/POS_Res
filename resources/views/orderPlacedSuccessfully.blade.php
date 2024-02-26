<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Placed</title>
  <link rel="stylesheet" href="{{asset('assets/css/orderPlacedSuccessfully.css')}}">
  
</head>
<body>

    
    <header><nav><a href="/">Home</a></nav></header>
    <main>
        <div>
        <p>Thank you for your order!</p>
    
        <div>
            {{-- <strong>Order ID: {{ $invoiceData['invoiceNumber'] }}</strong> --}}
        </div>
    
        {{-- <div>
            <strong>Customer Information:</strong><br>
            Name: {{ $invoiceData['customerName'] }}<br>
        </div> --}}
    
        <div class="food-preparation"></div>
    </div>
    </main>

</body>
</html>
