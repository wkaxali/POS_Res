<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width">
    <title> Customer Profile </title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <script src="{{asset('assets/js/raphael.js')}}"></script>
   <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
        

<style type="text/css">
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #FFCC00;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.35);
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.9em;
	margin-bottom: 10px;
    color:white;
    font-weight: bold;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color: black;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	/* padding: 19px 39px 18px 39px; */
	color: #FFF;
	margin: 0 auto;
	background: #00b300;
	font-size: 20px;
	text-align: center;
	font-style: normal;
	width: 25%;
	border: 1px solid #16a085;
	border-width: 1px 1px 2px;
	margin-bottom: 10px;
    border-radius:2px;
}

        </style>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	<meta name="robots" content="noindex, follow">
</head>
	<body>   
		<nav class="navbar navbar-expand-lg navbar-light bg-light">  <h2>Admin</h2>
			@include('adminNavbar') 
			</nav>
                <div class="form-style-5">
            
            <fieldset>
            <legend></span> Add Customer</legend>
            <input type="text" required name="field1" placeholder="Customer Name *" id="customerName">
            <input type="text" required name="field2" placeholder="Address *" id="address">
            <input type="text"  required name="field1" placeholder="Contact *" id="contact">
            <input type="email"  required name="field1" placeholder="email *" id="email">
         
            <input type="text" required name="field1" placeholder="Reffered ID*" id="refID">
            <input type="text" required name="field2" placeholder="Rank *" id="rank">
            
         
              
            
            <input type="submit" value="Submit" onclick="addCustomer()" />
            
            </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="raphael.js"></script>

    <script>
    
        function addCustomer() {
            var customerName = document.getElementById("customerName").value;
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var email = document.getElementById("email").value;
        
            var rank = document.getElementById("rank").value;
            var refID = document.getElementById("refID").value;

			var newCustomer = {'customerName':customerName, 'address':address, 'contact':contact,   'refID':refID, 'rank':rank, 'email':email};
            if (customerName==""||address==""||contact==""|| refID==""||rank==""||email==""){
                alert("please fill out these fields");
            }else{
            var AC = JSON.stringify(newCustomer);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert(this.responseText);
                }
            };

            
            // xhttp.open("GET", "./addCustomer/" + AC, true);
            // xhttp.send();

			xhttp.open("POST", "./addCustomer/", true);
			xhttp.setRequestHeader('Content-Type', 'application/json');

			var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
			xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
			
			xhttp.send(AC);
        }
        }
		function logout(){
			var adminID = ('{{ Session::get('AdminID')}}');
			var cashierID = ('{{ Session::get('cashierID')}}');
			var lg;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				alert(this.responseText);
				window.location.assign("/admin")
				}
			}
			if(adminID!=""||cashierID!=""){
			lg=1;
			}
			// xhttp.open("GET", "./logout/"+lg, true);
			// xhttp.send();

			xhttp.open("POST", "./logout/", true);
			xhttp.setRequestHeader('Content-Type', 'application/json');

			var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
			xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
			
			xhttp.send(lg);

			}
    </script>