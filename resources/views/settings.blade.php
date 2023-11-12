<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Fashion Gaze a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">

    <!--Start-slider-script-->
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    </script>
    <style>
        #mens:hover {
            cursor: pointer;
        }

        .row {
            margin: 5px 0px;
        }

        .form-control {
            width: 200px !important;
            display: inline-block !important;
        }

        label {
            display: block;
        }

        .myRow label {
            width: 200px;
        }

    </style>
</head>

<body>
    @include("index")
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 id="h1">Settings</h1>
            </div>
        </div>

        <br>
        <div class="row myRow">
            <div class="col-md-6">
                <label for="">Navbar Brand</label>
                <input type="text" class="form-control" name="" id="color">
                <button onclick="getVal()" class="btn btn-success">Change</button>
                <br>
                <label for="">Navbar background</label>
                <input type="text" class="form-control" name="" id="color-1">
                <button onclick="getVal1()" class="btn btn-success">Change</button>

                <br>
                <label for="">Navbar Links</label>
                <input type="text" class="form-control" name="" id="color-2">
                <button onclick="getVal2()" class="btn btn-success">Change</button>

                <br>
                <label for="">Banner Main Heading</label>
                <input type="text" class="form-control" name="" id="color-3">
                <button onclick="getVal3()" class="btn btn-success">Change</button>

                <br>
                <label for="">h1</label>
                <input type="text" class="form-control" name="" id="color-4">
                <button onclick="getVal100()" class="btn btn-success">Change</button>

                <br>
                <label for="">h2</label>
                <input type="text" class="form-control" name="" id="color-4">
                <button onclick="getVal4()" class="btn btn-success">Change</button>

                <br>
                <label for="">H3</label>
                <input type="text" class="form-control" name="" id="color-5">
                <button onclick="getVal5()" class="btn btn-success">Change</button>

                <br>
                <label for="">H4</label>
                <input type="text" class="form-control" name="" id="color-6">
                <button onclick="getVal6()" class="btn btn-success">Change</button>

                <br>
                <label for="">H5</label>
                <input type="text" class="form-control" name="" id="color-7">
                <button onclick="getVal7()" class="btn btn-success">Change</button>

                <br>
                <label for="">H6</label>
                <input type="text" class="form-control" name="" id="color-8">
                <button onclick="getVal8()" class="btn btn-success">Change</button>
            </div>
            <div class="col-md-6">
                <label for="">Body</label>
                <input type="text" class="form-control" name="" id="color-9">
                <button onclick="getVal9()" class="btn btn-success">Change</button>
                <br>
            
                <label for="">Cards</label>
                <input type="text" class="form-control" name="" id="color-11">
                <button onclick="getVal11()" class="btn btn-success">Change</button>

                <br>
                <label for="">Section One</label>
                <input type="text" class="form-control" name="" id="color-12">
                <button onclick="getVal12()" class="btn btn-success">Change</button>

                <br>
                <label for="">Section Two</label>
                <input type="text" class="form-control" name="" id="color-13">
                <button onclick="getVal13()" class="btn btn-success">Change</button>

                <br>
                <label for="">Section Three</label>
                <input type="text" class="form-control" name="" id="color-14">
                <button onclick="getVal14()" class="btn btn-success">Change</button>

                <br>
                <label for="">Section Four</label>
                <input type="text" class="form-control" name="" id="color-15">
                <button onclick="getVal15()" class="btn btn-success">Change</button>

                <br>
                <label for="">Section Five</label>
                <input type="text" class="form-control" name="" id="color-16">
                <button onclick="getVal16()" class="btn btn-success">Change</button>

                <br>
                <label for="">Footer backgroundcolor</label>
                <input type="text" class="form-control" name="" id="color-17">
                <button onclick="getVal17()" class="btn btn-success">Change</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">


            </div>
        </div>
    </div>
    </div>























    <script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script>
        function getVal() {
            var a = document.getElementById("color").value;
            document.getElementById("myid").style.color = "#" + a;
            // alert(a);
        }

        function getVal1() {
            var a = document.getElementById("color-1").value;
            document.getElementById("site-header").style.backgroundColor = "#" + a;
        }

        function getVal2() {
            var a = document.getElementById("color-2").value;
            document.querySelector(".nav-link").style.color = "#" + a;
        }

        function getVal3() {
            var a = document.getElementById("color-3").value;
            document.getElementById("bannerTitle").style.color = "#" + a;
        }

     

      
    </script>






</body>

</html>
