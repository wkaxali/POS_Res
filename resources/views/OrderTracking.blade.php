<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<title>Order Submit</title>
<style>
header {
margin-top: 7%;
}

@media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
header {
margin-top: 35%;
}

.subOrder {
font-size: 50px;
}

.mainHeader {
width: auto !important;
}
}

.mainHeader {
border: 1px solid #333;
width: 20%;
margin: 0 auto;
padding: 10px;
-webkit-box-shadow: 10px 10px 30px 2px rgba(0, 0, 0, 0.75);
-moz-box-shadow: 10px 10px 30px 2px rgba(0, 0, 0, 0.75);
box-shadow: 10px 10px 30px 2px rgba(0, 0, 0, 0.75);
border-radius: 10px;
}

#orderID {
font-weight: 700;
color: red;
}

@media only screen and (max-width: 768px) {
.mainHeader {
width: auto !important;

}
}

#container {
margin: 20px;
width: 200px;
height: 200px;
}

</style>
</head>

<body onload="getStatus2()">
<header>
<div class="mainHeader">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<h3 class="subOrder">Your Order <br> is <br> Submitted </h3>
<p id="orderID">{{ Session::get('OrderID')}}</p>

<!-- session(['OrderTime' => $dateNow]); -->


</div>
</div>

</div>
<br>
<div class="container">
<div class="row">
<div class="col-12">
<div id="container" style="position: relative;">
<div class="myinner" id="status"
style="position: absolute;left: 50%; top: 50%; transform: translate(-50%,-50%);">

</div>
</div>
</div>

</div>
<br><br>
<div class="row">
<div class="col-md-12">
<a href="/orev" style="background-color: #0abf53 ; color: #fff;" class="btn w-100">Go
Back</a>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js'></script>
<script src="./script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/0.6.1/progressbar.min.js"
integrity="sha512-7IoDEsIJGxz/gNyJY/0LRtS45wDSvPFXGPuC7Fo4YueWMNOmWKMAllEqo2Im3pgOjeEwsOoieyliRgdkZnY0ow=="
crossorigin="anonymous"></script>
<script>
var bar = new ProgressBar.Circle(container, {
strokeWidth: 6,
easing: 'easeInOut',
duration: 1400,
color: '#FFEA82',
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
</body>

</html>