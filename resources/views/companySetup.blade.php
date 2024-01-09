<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <style>
        .registration-form {
            padding: 0px 0;
            /* background-color: #fff; */

        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 70px;
            border-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }



        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 15px;
            padding: 10px 20px;
            margin: 0px auto 15px auto;
        }

        .form-control {
            width: 250px !important;
        }


        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #0a549d;
            border: none;
            color: white;
            margin-top: 20px;
            /* width: 100px; */
        }

        .registration-form .form-group {
            padding: 0;
            margin: 0;
        }




        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 84%;
            }
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 3px 0px;


        }

        label {
            width: 150px;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84%;
        }

        .update {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .print {
            width: 77px;
        }

        .inner-block {
            padding: 3em 2em 0em 2em;
        }

        @media only screen and (max-width: 1440px) {
            .inner-block {
                padding: 1em 2em 0em 2em;
            }
        }

        @media only screen and (max-width: 768px) {
            .form-control {
                width: 180px !important;
            }

            .addCut {
                font-size: 25px;
                margin-bottom: 50px;
            }

            .registration-form {
                padding: 60px 0;
                /* background-color: #fff; */

            }
        }
        .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-family: Arial, sans-serif;
  font-size: 14px;
  resize: vertical;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.textarea:focus {
  outline: none;
  border-color: #66afe9;
  box-shadow: 0 4px 8px rgba(102, 175, 233, 0.2);
}
table td:nth-child(2) {
            margin-left: 50px;
            display: block;
        }

        .cardHeader-left {
            float: left;
        }

        .cardHeader-right {
            float: right;
        }

        .cardHeader-right {}

        .clear {
            clear: both;
        }

        #AdminCard {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(75, 83, 53);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff;
        }
        #KitchenCard {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(220, 185,55);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff !important;
        }
        #Cancel {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(20, 135,255);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff !important;
        }
        #buttonhide{
            display: none;
        }


        #DeliveryPendingCard {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(0, 153, 115);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff;
        }

        #DeliveredCard {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(154, 139, 79);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff;
        }

        
        #ReceivedCard {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(80, 65, 111);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff !important;
        }


        .menu {
            display: inline-block;
            margin-left: -130px;
        }

      .card  li {
            font-size: 20px;
            font-weight: 700;
        }

        .remarks {
            font-size: 14px;
            font-weight: 300;

        }



        .card-footer button {
            width: 115px;
            height: 45px;
        }

        .card-footer {
            border-top: 1px solid #ffffff;
            /* background-color: #a2d9ce; */
        }


        .card {
            margin: 20px 0px;
            width: 20rem;
        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {


            .card-footer button {
                width: 120px;
                height: 45px;
            }
        }

        .card-header {
            border-bottom: 1px solid #ffffff;
        }
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
		{{-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h2>Admin</h2>
        @include('adminNavbar')
			</nav>
             <div class="form-style-5">
            
            <fieldset>
            <legend></span> Setup Company   </legend>
            <input type="text" required name="field1" placeholder="Company Name *" id="companyName">
            <input type="text" required name="field2" placeholder="Store Name *" id="storeName">
            <input type="text"  required name="field1" placeholder="Address *" id="address">
            <input type="email"  required name="field1" placeholder="Phone Number *" id="phoneNumber">
            <input type="text" required name="field1" placeholder="Mobile Number *" id="mobileNumber">
            <input type="text" required name="field2" placeholder="Company Email *" id="companyEmail">
            <input type="text" required name="field2" placeholder="Owner Name *" id="ownerName">
            <input type="text" required name="field2" placeholder="Developer Name *" id="devName">
            <input type="text" required name="field2" placeholder="Developer Number *" id="devNumber">
            <input type="text" required name="field2" placeholder="Developer Address *" id="devAddress">
            <textarea id="TOStext" class = textarea rows = "4" columns = "50" required placeholder="Enter the Terms and Conditions here" ></textarea>
            
         
              
            
            <input type="submit" value="Submit" onclick="addCompanyInfo()" />
            
            </div>

{{-- <div class="form-style-5">
 <div class="clearfix"></div>
    <div class="page-container">
        <div class="center-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                            <form>

                                    <div class="CustomerAddition  mb-3" style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Company Information</h2>

                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="companyName" required
                                            placeholder="Company Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="storeName" required
                                            placeholder="Store Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="address" required
                                            placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="phoneNumber" required
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" id="mobileNumber" required
                                            placeholder="Mobile Number">
                                    </div><div class="form-group">
                                        <input type="text" class="form-control item" id="companyEmail" required
                                            placeholder="Company Email">
                                    </div><div class="form-group">
                                        <input type="text" class="form-control item" id="ownerName" required
                                            placeholder="Owner Name">
                                    </div><div class="form-group">
                                        <input type="text" class="form-control item" id="devName" required
                                            placeholder="Developer Name">
                                    </div><div class="form-group">
                                        <input type="text" class="form-control item" id="devNumber" required
                                            placeholder="Developer Number">
                                    </div><div class="form-group">
                                        <input type="text" class="form-control item" id="devAddress" required
                                            placeholder="Developer Address">
                                    </div><div class="form-group" style = "text-align: center;">
                                            <textarea id="TOStext" class = textarea rows = "4" columns = "50" required placeholder="Enter the Terms and Conditions here" ></textarea>
                                    </div>

                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="addCompanyInfo()">Save</button>
                                    </div>


                                    </form>
                                <form>

                                    <div  style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Touch Screen Toggle</h2>

                                    </div>
                                    

                                    <div class="form-group">
                                  

                                    <label for="toggle-btn" style="margin-top:20px; margin-left:100px">Touch Screen:</label>
                                        <label class = "switch">    
                                            <input type="checkbox" id="toggle-btn" disabled>
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                      

                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="toggleThetouchScreen()">Save</button>
                                        
                                    </div>


                                </form>
                                 

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        


        <div class="clearfix"></div>
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
     <script src="{{asset('assets/js/companySetup.js')}}"></script>


</body>

</html>