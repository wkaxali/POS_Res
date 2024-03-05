<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>SignUp Page</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

		* {
			box-sizing: border-box;
		}

		body {
			background: #f6f5f7;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 50px;
		}

		h1 {
			font-weight: bold;
			margin: 0;
		}

		h2 {
			text-align: center;
		}

		p {
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		span {
			font-size: 12px;
		}

		a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0;
		}

		button {
			border-radius: 20px;
			border: 1px solid #0abf53;
			background-color: #0abf53;
			color: #FFFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
			cursor: pointer;
		}

		button:active {
			transform: scale(0.95);
		}

		button:focus {
			outline: none;
		}

		button.ghost {
			background-color: transparent;
			border-color: #FFFFFF;
		}

		form {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			text-align: center;
		}
		
		.reform {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			text-align: center;
		}

		input {
			background-color: #eee;
			border: none;
			padding: 12px 15px;
			margin: 8px 0;
			width: 100%;
		}

		.container {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
				0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: hidden;
			width: 768px;
			max-width: 100%;
			min-height: 480px;
		}

		.form-container {
			position: absolute;
			top: 0;
			height: 100%;
			transition: all 0.6s ease-in-out;
		}

		.sign-in-container {
			left: 0;
			width: 50%;
			z-index: 2;
		}

		.container.right-panel-active .sign-in-container {
			transform: translateX(100%);
		}

		.sign-up-container {
			left: 0;
			width: 50%;
			opacity: 0;
			z-index: 1;
		}

		.container.right-panel-active .sign-up-container {
			transform: translateX(100%);
			opacity: 1;
			z-index: 5;
			animation: show 0.6s;
		}

		@keyframes show {

			0%,
			49.99% {
				opacity: 0;
				z-index: 1;
			}

			50%,
			100% {
				opacity: 1;
				z-index: 5;
			}
		}

		.overlay-container {
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
			overflow: hidden;
			transition: transform 0.6s ease-in-out;
			z-index: 100;
		}

		.container.right-panel-active .overlay-container {
			transform: translateX(-100%);
		}

		.overlay {
			background: #FF416C;
			background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
			background: linear-gradient(to right, #fec73d, #fec73d);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			color: #FFFFFF;
			position: relative;
			left: -100%;
			height: 100%;
			width: 200%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.container.right-panel-active .overlay {
			transform: translateX(50%);
		}

		.overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 40px;
			text-align: center;
			top: 0;
			height: 100%;
			width: 50%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.overlay-left {
			transform: translateX(-20%);
		}

		.container.right-panel-active .overlay-left {
			transform: translateX(0);
		}

		.overlay-right {
			right: 0;
			transform: translateX(0);
		}

		.container.right-panel-active .overlay-right {
			transform: translateX(20%);
		}

		.social-container {
			margin: 20px 0;
		}

		.social-container a {
			border: 1px solid #DDDDDD;
			border-radius: 50%;
			display: inline-flex;
			justify-content: center;
			align-items: center;
			margin: 0 5px;
			height: 40px;
			width: 40px;
		}

		footer {
			background-color: #222;
			color: #fff;
			font-size: 14px;
			bottom: 0;
			position: fixed;
			left: 0;
			right: 0;
			text-align: center;
			z-index: 999;
		}

		footer p {
			margin: 10px 0;
		}

		footer i {
			color: red;
		}

		footer a {
			color: #3c97bf;
			text-decoration: none;
		}
	</style>
</head>

<body onload="preFillFields()">
<input type="text" placeholder="serverName" id="servername" style="display:none"/>

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<div class="reform">
				<h1>Create Account</h1>
				<!-- <div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span> -->
				<input type="text" placeholder="User Name" id="signUpName"/>
				<input type="text" placeholder="Contact" id="signUpContact"/>
				<!-- <input type="text" placeholder="Reffered By" id="refferedBy" readonly/> -->
				<input type="email" placeholder="Email" id="signUpEmail"/>
				<input type="password" placeholder="Password" id="signUpPassword"/>
				<input type="password" placeholder="Retype Password" id="rePassword" onchange="passwordCheck()"/>
				<button onclick="signUp()" id="signUpBtn">Sign Up</button>
			</div>
		</div>
		<div class="form-container sign-in-container">
			<div class="reform">
				<h1>Sign in</h1>
				<div class="social-container" style="visibility: hidden;" >
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span style="visibility: hidden;">or use your account</span>
				<input type="text" placeholder="User Email or Contact" id="login"/>
				<input type="password" placeholder="Password" id="password"/>
				<a href="#">Forgot your password?</a>
				<button onclick="signIn()">Sign In</button>
			</div>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn" >Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1 id="headerTitle">Welcome To Khyber Pass!</h1>
					<p>Enter your personal details and start your journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>


	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		})

		function signIn(){

			var login = document.getElementById('login').value;
			var password = document.getElementById('password').value;
			var signInData = [login, password];
			
			var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
					 if(this.responseText!="Invalid User"){
                    location.replace("./newmenu")
                  }
                  else{
                    alert("Invalid user");
                  }
                 }
            };

            var data = JSON.stringify(signInData);
			
            // xhttp.open("GET", "./loginUser/" + data, true);
            // xhttp.send();

	xhttp.open("POST", "./loginUser/", true);
    xhttp.setRequestHeader('Content-Type', 'application/json');

    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    
    xhttp.send(data);
        }

		function getCompanyName(){
   
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function () {

		 if (this.readyState == 4 && this.status == 200) {
			 var data= JSON.parse(this.responseText);
			 document.title = data[0]['CompanyName']
			 document.getElementById("headerTitle").innerHTML = "Welcome To "+data[0]['CompanyName']+"!"
		 }
	 };
	
	 xhttp.open("GET", "./getCompanyInfo/", true);

	 xhttp.send();
	}
		function passwordCheck(){
			var pass1 = document.getElementById('signUpPassword').value;
			var pass2 = document.getElementById('rePassword').value;
			if(pass1!=pass2){
				alert("Password not Same");
				document.getElementById("signUpBtn").disabled = true; 
			}else{
				document.getElementById("signUpBtn").disabled = false; 
			}
		}

		function signUp(){
			
			var name = document.getElementById('signUpName').value;
			var contact = document.getElementById('signUpContact').value;
			// var refferedBy = document.getElementById('refferedBy').value;
			
			var email = document.getElementById('signUpEmail').value;
			var password = document.getElementById('signUpPassword').value;
			var rePassword = document.getElementById('rePassword').value;
			
			var signUpData = [name, contact, email, password, rePassword];
			
			var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
					alert(this.responseText);
                }
            };

            var data = JSON.stringify(signUpData);
			// alert(data);
            // xhttp.open("GET", "./signUp/" + data, true);
            // xhttp.send();
			xhttp.open("POST", "./signUp/", true);
    xhttp.setRequestHeader('Content-Type', 'application/json');

    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    
    xhttp.send(data);
		}


		function preFillFields() {
			getCompanyName()
            var hashParams = window.location.hash.substr(1).split('&');
            for (var i = 0; i < hashParams.length; i++) {
                var p = hashParams[i].split('=');
                document.getElementById(p[0]).value = decodeURIComponent(p[1]);
            }
		}
	</script>

</body>

</html>