<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title> Friends Profile </title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <script src="{{asset('assets/js/raphael.js')}}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Title</title>
    <style>

        .myImg {
            height: 200px;
            width: 200px;
            border: 1px solid #333;
            border-radius: 50%;
            margin: 0 auto;
        }

        body {
            background-color: lightblue;
        }

        .carousel-control-next {
            right: -140px !important;
        }

        .carousel-control-prev {
            left: -140px !important;
        }
.row{
    margin: 4px 0px !important;
}
 
        .Treant {
            position: relative;
            overflow: hidden;
            padding: 0 !important;
            margin: 0 auto !important;
        }

        .Treant>.node,
        .Treant>.pseudo {
            position: absolute;
            display: block;
            visibility: hidden;
        }

        .Treant.Treant-loaded .node,
        .Treant.Treant-loaded .pseudo {
            visibility: visible;
        }

        .Treant>.pseudo {
            width: 0;
            height: 0;
            border: none;
            padding: 0;
        }

        .Treant .collapse-switch {
            width: 3px;
            height: 3px;
            display: block;
            border: 1px solid rgb(196, 18, 18);
            position: absolute;
            top: 1px;
            right: 1px;
            cursor: pointer;
        }

        .Treant .collapsed .collapse-switch {
            background-color: #868DEE;

        }

        .Treant>.node img {
            border: none;
            float: none;
            text-align: center;
        }

        .Treant>.node {
            text-align: center;
        }

        body,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        form,
        fieldset,
        input,
        textarea,
        p,
        blockquote,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        fieldset,
        img {
            border: 0;
        }

        address,
        caption,
        cite,
        code,
        dfn,
        em,
        strong,
        th,
        var {
            font-style: normal;
            font-weight: normal;
        }

        caption,
        th {
            text-align: left;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%;
            font-weight: normal;
        }

        q:before,
        q:after {
            content: '';
        }

        abbr,
        acronym {
            border: 0;
        }

        body {
            /* background: rgb(226, 197, 30); */
        }

        /* optional Container STYLES */
        .chart {
            height: 100%;
            margin: 5px;
            width: 900px;


        }

        .Treant>.node {}

        .Treant>p {
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: bold;
            font-size: 12px;
        }

        .node-name {
            font-weight: bold;
        }

        .nodeExample1 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            background-color: #ffffff;
            /* border: 2px solid #fcb045; */
            height: 150px;
            width: 150px;
            border-radius: 50%;
            font-family: Tahoma;
            font-size: 12px;

            background: #008080;
            background: #008080;
            color: #ffffff;

            box-shadow: 0 0 5px #008080,
                0 0 15px #008080,
                0 0 20px #008080,
                0 0 50px #008080;

        }
        

        .ProfileClass {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            background-color: #ffffff;

            height: 150px;
            width: 400px;

            font-family: Tahoma;
            font-size: 12px;
            background: #008080;
            background: #008080;
            color: #ffffff;

            box-shadow: 0 0 5px #008080,
                0 0 15px #008080,
                0 0 20px #008080,
                0 0 50px #008080;

        }

        .nodeExample1:hover {
            box-shadow: 0 0 5px #008080,
                0 0 25px #008080,
                0 0 50px #008080,
                0 0 100px #008080;
            border: none;

        }

        .nodeExample1 img {
            border-radius: 50%;
        }

        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: linear-gradient(#141e30, #243b55); */
        }

        .login-box {
            background: linear-gradient(#141e30, #243b55);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
            padding: 40px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -25px;
            left: 0;
            color: #f1c40f;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #f1c40f;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #f1c40f;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #f1c40f,
                0 0 25px#f1c40f,
                0 0 50px #f1c40f,
                0 0 100px #f1c40f;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #f1c40f);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #f1c40f);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #f1c40f);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #f1c40f);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        .myClass {
            /* background-color: #f48c03; */
            float: right;
            padding: 70px 10px;
            margin-top: -160px !important;
            width: 100px;
            color: gold;
            /* height: 300px; */
            border-radius: 10px;
            font-size: 30px;
            font-family: 'Nerko One', cursive;

        }

        .myClass-1 {
            float: left;
            margin-left: 0px;
            font-family: 'Nerko One', cursive;
            color: gold;
            /* background-color: #f48c03; */
            border-radius: 10px;

            width: 100px;
            margin-top: -160px !important;

            padding: 70px 10px;
            font-size: 30px;


        }
        
        path {
            stroke: #333;
            stroke-width: 3px;
        }

        .ProfileClass .node-name {
            font-size: 30px;

        }

        .myOwnNode-3 img {
            height: 80px;
            width: 80px;
            border-radius: 0% !important;
        }

        .node-coins {
            font-size: 20px;
            color: gold;
        }

        .myOwnNode-3 .node-title {
            /* margin-top: 10px; */
            font-size: 20px;
            color: gold;
        }

        .myFirstMainDiv {
            margin: 0 auto;
        }

        #referBody {
          background-image: url({{asset('assets/images/banner.png')}});

        }
        .tablesBox{
            color:#fff !important;
        }
        .tablesBox h5{
            text-align:center;
        }
        th,td{
            text-align:center;
        }

    </style>
</head>

<body id="referBody" onload="friends()">
<div class="container">
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <div class="myImg">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <br>
        <div class="row" style="border: 1px solid #333; padding: 10px 10px;">
            <div class="col-md-10 offset-md-1">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        
                        
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4" id="friendsDiv">
                                   <!-- hfjhffjh -->
                                </div>
                                <div id="wrapper">
                                <div class="col-md-4" id="friendsDiv">
                                   <!-- hfjhffjh -->
                                </div>
                                <div class="col-md-4" id="friendsDiv">
                                   <!-- hfjhffjh -->
                                </div>
                                <div class="col-md-4" id="friendsDiv">
                                   <!-- hfjhffjh -->
                                </div>
                                <div class="col-md-4" id="friendsDiv">
                                   <!-- hfjhffjh -->
                                </div>
                                </div>
                            </div>
                        </div>

                        
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <div class="myFirstMainDiv">

        <div class="chart" id="basic-example">
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="raphael.js"></script>

    <script>
    
function friends() {
    
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    // var dt = this.responseText;
                    // var data = JSON.parse(dt);
                    // var referrelID = data[0].ReferredByID;
                    // var referrelName = data[0].ReferrelName;
                    
                    
                    document.getElementById("friendsDiv").innerHTML=this.responseText;
                    
                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./friendsData/", true);
            xhttp.send();
            
        }

function friends2(FID) {
var wrapper = document.getElementById('wrapper').childNodes;
    
// alert(FID);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            
            document.getElementById("wrapper[1]").innerHTML=this.responseText;
            
        }
    };
    
    // var MenuID=$('#Menus').find(":selected").val();
    xhttp.open("GET", "./friendsData2/" + FID, true);
    xhttp.send();
    
}
    </script>