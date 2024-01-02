<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <title>Ready To Deliver</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
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

        #FirstCard {
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 37px 0px rgba(0, 0, 0, 0.75);
            background: rgb(0, 153, 115);
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%); */
            color: #ffffff;
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
            width: 100px;
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

    </style>
</head>

<body  onload="getDeliveryPendingOrders()">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h2>Delivery Pending Orders</h2>
    @include('adminNavbar')
    <header class="mt-3">
        <div class="container">
            <div class="row" id="allcards">
                <div class="col-md-4">
                    <div class="card" id="FirstCard">
                        <!-- <div class="card-header  ">
                            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
                                Order #: 2321
                            </div>
                            <div style="font-weight: 900; font-size: 19px;  color: #ffffff;" class="cardHeader-right">
                                Take Away

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header " id="CustomerDetails">
                            <div class="cardHeader-left" style="font-weight: 600;">
                                Waqas Ali
                            </div>
                            <div class="cardHeader-right" style="font-weight: 600;">
                                #: 34232323232

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header text-center" style="font-weight: 500; ">
                            House #31, main Ferozpur Road Lahore
                        </div>


                        <div class="card-body text-center">
                            <ol>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                    <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Commodi, reprehenderit.</div>
                                </li>

                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                </li>


                            </ol>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success" id="ready">Ready</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="FirstCard">
                        <div class="card-header">
                            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
                                Order #: 2321
                            </div>
                            <div style="font-weight: 900; font-size: 19px;  color: #ffffff;" class="cardHeader-right">
                                Delivery

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header ">
                            <div class="cardHeader-left" style="font-weight: 600;">
                                Waqas Ali
                            </div>
                            <div class="cardHeader-right" style="font-weight: 600;">
                                #: 34232323232

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header text-center" style="font-weight: 500;">
                            House #31, main Ferozpur Road Lahore
                        </div>


                        <div class="card-body text-center">
                            <ol>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                    <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Commodi, reprehenderit.</div>
                                </li>

                                <li>Zinger &times; 5 </li>
                                <li>Zinger &times; 5 </li>

                            </ol>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success">Ready</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="FirstCard">
                        <div class="card-header ">
                            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
                                Order #: 2321
                            </div>
                            <div style="font-weight: 900; font-size: 19px;  color: #ffffff;" class="cardHeader-right">
                                Take Away

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header ">
                            <div class="cardHeader-left" style="font-weight: 600;">
                                Waqas Ali
                            </div>
                            <div class="cardHeader-right" style="font-weight: 600;">
                                #: 34232323232

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header text-center" style="font-weight: 500;">
                            House #31, main Ferozpur Road Lahore
                        </div>


                        <div class="card-body text-center">
                            <ol>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                    <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Commodi, reprehenderit.</div>
                                </li>

                                <li>Zinger &times; 5 </li>
                                <li>Zinger &times; 5 </li>

                            </ol>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success">Ready</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="FirstCard">
                        <div class="card-header">
                            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
                                Order #: 2321
                            </div>
                            <div style="font-weight: 900; font-size: 19px;  color: #ffffff;" class="cardHeader-right">
                                Delivery

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header ">
                            <div class="cardHeader-left" style="font-weight: 600;">
                                Waqas Ali
                            </div>
                            <div class="cardHeader-right" style="font-weight: 600;">
                                #: 34232323232

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header text-center" style="font-weight: 500;">
                            House #31, main Ferozpur Road Lahore
                        </div>


                        <div class="card-body text-center">
                            <ol>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                    <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Commodi, reprehenderit.</div>
                                </li>

                                <li>Zinger &times; 5 </li>
                                <li>Zinger &times; 5 </li>

                            </ol>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success">Ready</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="FirstCard">
                        <div class="card-header">
                            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
                                Order #: 2321
                            </div>
                            <div style="font-weight: 900; font-size: 19px;  color: #ffffff;" class="cardHeader-right">
                                Take Away

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header ">
                            <div class="cardHeader-left" style="font-weight: 600;">
                                Waqas Ali
                            </div>
                            <div class="cardHeader-right" style="font-weight: 600;">
                                #: 34232323232

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header text-center" style="font-weight: 500;">
                            House #31, main Ferozpur Road Lahore
                        </div>


                        <div class="card-body text-center">
                            <ol>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                    <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Commodi, reprehenderit.</div>
                                </li>

                                <li>Zinger &times; 5 </li>
                                <li>Zinger &times; 5 </li>

                            </ol>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success">Ready</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="FirstCard">
                        <div class="card-header">
                            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
                                Order #: 2321
                            </div>
                            <div style="font-weight: 900; font-size: 19px;  color: #ffffff;" class="cardHeader-right">
                                Take Away

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header ">
                            <div class="cardHeader-left" style="font-weight: 600;">
                                Waqas Ali
                            </div>
                            <div class="cardHeader-right" style="font-weight: 600;">
                                #: 34232323232

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="card-header text-center" style="font-weight: 500;">
                            House #31, main Ferozpur Road Lahore
                        </div>


                        <div class="card-body text-center">
                            <ol>
                                <li>
                                    <div class="menu">
                                        Zinger &times; <strong style="color: red;"> 5</strong>
                                    </div>
                                    <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Commodi, reprehenderit.</div>
                                </li>

                                <li>Zinger &times; 5 </li>
                                <li>Zinger &times; 5 </li>

                            </ol>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success">Ready</button>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>


    </header>







    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
     <script>
        $(document).ready(function () {
            $("#ready").click(function () {
                $("#FirstCard").remove();
            })
        })

    </script> 
    <script>
    window.setInterval(function(){
        getDeliveryPendingOrders();
}, 5000);
</script>
    <script>




        function getDeliveryPendingOrders() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    document.getElementById("allcards").innerHTML =data ; 
                 

                }
            };
            
            xhttp.open("GET", "./getDeliveryPendingOrders", true);

            xhttp.send();
        }

    </script>
    <script>
     function getID(id){
    
    
    var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                
                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    alert(data);
                }
            };
            payload = JSON.stringify({'id':id})
            // xhttp.open("GET", "./setDelivered/"+id, true);

            // xhttp.send();
            xhttp.open("POST", "./setDelivered/", true);
xhttp.setRequestHeader('Content-Type', 'application/json');

var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);

xhttp.send(payload);
        
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
xhttp.open("POST", "./logout/", true);
			xhttp.setRequestHeader('Content-Type', 'application/json');

			var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
			xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
			
			xhttp.send(lg);
}



function cancelOrder(id) {

if(confirm("Do you want to cancel order number "+id)){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {

if (this.readyState == 4 && this.status == 200) {
alert(this.responseText);
}
};
payload = JSON.stringify({'id':id})
// xhttp.open("GET", "./cancelOrder/"+id, true);

// xhttp.send();
xhttp.open("POST", "./cancelOrder/", true);
xhttp.setRequestHeader('Content-Type', 'application/json');

var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);

xhttp.send(payload);
}
}
    </script>
</body>
</html>
