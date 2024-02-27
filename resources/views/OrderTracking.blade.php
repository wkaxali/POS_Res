<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height = device-height, initial-scale=1.0">
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/css/orderTrackingStyles.css')}}">

<title>Order Tracking</title>

</head>

<body onload="getStatus2(); displayFooterSection()">

    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item">
                          <a class="nav-link" href="/">Home </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/newmenu">Menu </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#ContactUs&amp;me">Contact Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/wa">Refer a Friend </a>
                        </li>
                        
                      </ul>
          
                      <div class="user_option">
                      </div>
                      
                    </div>
              
                
            </nav>

        </div>
      </header>

    <main class="mainHeader">
   
    <div class="internalHeader1">

        <div><h1>Your order has been placed</h1></div>
        <div><label class="label_alignment">OrderID: <p id="orderID">{{ Session::get('invoiceDetails.invoiceNo')}}</p></label></div>
        <div id="mainContainer" style="position: relative;">
        <div class="myinner" id="status"
        style="position: absolute;left: 50%; top: 50%; transform: translate(-50%,-50%);">
        </div>
        </div>
    </div>

    <div class="internalHeader2">
        <h1>Order Details</h1>
        <div><label class="orderInfoLabels">Date:<p class="dateClass">{{ Session::get('invoiceDetails.invoiceDate')}}</p></label></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = Session::get('invoiceDetails.ProductNames');
                    @endphp
                @foreach ($i as $m)
                <tr>
                <td>{{ $m[1] }}</td>
                <td>{{ $m[2] }}</td>
                <td>{{ $m[3] }}</td>
                </tr>

            @endforeach
           
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>Total:</th>
                    <th style="text-align: end">{{ Session::get('invoiceDetails.netTotal')}}</th>
                </tr>
            </thead>
        </table>
    </div>

</main>

<footer id="footerSection"></footer>






<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js'></script>
{{-- <script src="./script.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/0.6.1/progressbar.min.js"
integrity="sha512-7IoDEsIJGxz/gNyJY/0LRtS45wDSvPFXGPuC7Fo4YueWMNOmWKMAllEqo2Im3pgOjeEwsOoieyliRgdkZnY0ow=="
crossorigin="anonymous"></script>
<script>
var bar = new ProgressBar.Circle(mainContainer, {
strokeWidth: 9,
easing: 'easeInOut',
duration: 1400,
color: '#FFAA82',
trailColor: '#eee',
trailWidth: 1,
svgStyle: null
});

bar.animate(0.10); // Number from 0.0 to 1.0

</script>



  <script>
        window.setInterval(function () {
        getstatus();

        }, 5000);
        function getStatus2(){
        setTimeout(getstatus, 5000);
        }
  </script>
  <script>
        function getstatus() {
        orderID = document.getElementById("orderID").innerText;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {


        var data = this.responseText;
        var a = JSON.parse(data);

        document.getElementById("status").innerHTML = a[0].OrderStatus;
        // alert();
        // bar = bar.animate(0.30);

        if (a[0].OrderStatus == "PLACED") {

            bar.animate(0.10);

        } else if (a[0].OrderStatus == "PREPARING") {

        bar.animate(0.250);
        } else if (a[0].OrderStatus == "PREPARED") {
        bar.animate(0.500);
        } else if (a[0].OrderStatus == "DISPATCHED") {
            bar.animate(0.750);

        
        } else if (a[0].OrderStatus == "RECEIVED") {
            bar.animate(1.0);

        
        } else if (a[0].OrderStatus == "Cancel") {
            bar.animate(0.0);

        
        }
        // document.getElementsByClass("progress-bar")[0].style.add = rotate(126deg);


        }
        };
        //alert("ljd");
        xhttp.open("GET", "./getstatus/" + orderID, true);

        xhttp.send();
        }

  </script>
  <script>
function displayFooterSection() { 
    var footerSectionHTML = ''
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
              var data = JSON.parse(this.responseText);
            //   console.log(data)
              footerSectionHTML = `  <!-- footer section -->
              <footer class="footer_section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 footer-col">
                      <div class="footer_contact" id ="ContactUs&me">
                        <h4>
                          Contact Us
                        </h4>
                        <div class="contact_link_box">
                          
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                              Address: ${data[0].Address} 
                            </span>
                          </a>
                          <a href="https://wa.me/${data[0].Phone}">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                              Call ${data[0].Phone} 
                            </span>
                          </a>
                          <a href="mailto:${data[0].CompanyEmail}">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                              ${data[0].CompanyEmail}
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 footer-col">
                      <div class="footer_detail">
                        <a href="/" class="footer-logo">
                          ${data[0].CompanyName}
                        </a>
                        
                      </div>
                    </div>
                    <div class="col-md-4 footer-col">
                      <h4>
                        Opening Hours
                      </h4>
                      <p>
                        Everyday
                      </p>
                      <p>
                        10.00 Am -10.00 Pm
                      </p>
                    </div>
                  </div>
              </footer>
              <!-- footer section -->`

            document.getElementById("footerSection").innerHTML = footerSectionHTML;

          }
      };
     
      xhttp.open("GET", "./getCompanyInfo/", true);
 
      xhttp.send();
}

  </script>
</body>

</html>