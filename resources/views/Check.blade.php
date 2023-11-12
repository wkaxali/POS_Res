<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}"> -->

</head>

<body onload="newFunc()">


		
				<h1>Sign in</h1>
				
				<input type="email" placeholder="Email" id="email"/>
				or
				<input type="text" placeholder="User Id" id="customerID"/>
				<input type="password" placeholder="Password" id="password"/>
				<a href="#">Forgot your password?</a>
				<button onclick="signIn()">Sign In</button>
			
		

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>




<script>


function signIn(){
			var email = document.getElementById('email').value;
			var customerID = document.getElementById('customerID').value;
			var password = document.getElementById('password').value;
			var signInData = [email, customerID, password];
			
			var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
					alert(this.responseText);
                }
            };

            var data = JSON.stringify(signInData);
			
            xhttp.open("GET", "./loginUser/" + data, true);
            xhttp.send();
        }


        function newFunc(){
			
			var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
					alert(this.responseText);
                    
                }
            };

            xhttp.open("GET", "./new/", true);
            xhttp.send();
        }


</script>






</html>
