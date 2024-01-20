<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/userProfileStyles.css')}}">

</head>
<body>

    <header class="bg-light py-2">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#">Restaurant App</a>
            <ul class="navbar navbar-expand-lg navbar-dark justify-content-center">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/newmenu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Refer a Friend</a></li>
            </ul>
        </nav>
    </header>

    <div class="container mt-4">
        <form>
            <h2 class="mb-4">Account Management</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>

                <div class="form-group col-md-6">
                    <label for="fullName">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="contact">Contact Details:</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>

            <div class="form-group">
                <label for="password">Change Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="address">Delivery Address:</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>

            <h3 class="mt-4">Order History</h3>
            <div class="order-history">
                <!-- Example Order -->
                <div class="order bg-light p-3 mb-3">
                    <span>Order ID: #1234</span>
                    <span>Order Time: 01/01/2024</span>
                    <span>Items: Pizza, Burger</span>
                </div>
            </div>

            <h3>Order Tracking</h3>
            <div class="order-tracking">
                <!-- Example Tracking Info -->
                <div class="tracking bg-light p-3 mb-3">
                    <span>Order ID: #1234</span>
                    <span>Status: In Transit</span>
                </div>
            </div>

        </form>
    </div>

<!-- Bootstrap JS and Popper.js are required for Bootstrap components -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>