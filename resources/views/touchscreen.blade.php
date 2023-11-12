<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KHYBER PASS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <style>
        #more {
            display: none;
        }

        .title-small {
            font-size: 16px;
            line-height: 30px;
            font-weight: 500;
            letter-spacing: .5px;
            color: #aaa;
            display: block;
            text-transform: uppercase;
        }

        .title-big {
            font-size: 44px;
            line-height: 50px;
            font-weight: 500;
            position: relative;
        }

        .w3l-bottom-grids-6 .area-box {
            padding: 50px 40px;
            position: relative;
            z-index: 1;
            border-radius: 8px;
            box-shadow: 0 25px 98px 0 rgba(0, 0, 0, 0.03);
            background-color: var(--bg-color);
            text-align: center;
            height: 530px !important;
        }

        .w3l-bottom-grids-6 .grids-feature span.fa {
            color: var(--primary-color);
            font-size: 30px;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .w3l-bottom-grids-6 h4 a.title-head {
            margin-top: 25px;
            display: block;
            color: var(--heading-color);
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: 15px;
            font-size: 26px;
            letter-spacing: 0;
        }

        .dollar {
            font-size: 30px;
            color: #28a745;
        }

        .w3l-bottom-grids-6 a.more {
            font-weight: 500;
            display: inline-block;
            margin-top: 30px;
            font-size: 18px;
            color: var(--heading-color);
        }

        @media only screen and (max-width: 768px) {
            #home img {
                border-radius: 50%;
                height: 300px !important;
                width: 300px !important;
                box-shadow: 0 0 5px #ffffff,
                    0 0 25px#ffffff,
                    0 0 50px #f1c40f,
                    0 0 100px #f1c40f;
            }
        }

        .navbar-brand {
            font-weight: 800;
            font-family: 'Roboto', sans-serif;
        }

        .search-right {
            width: 20% !important;
        }

        .navbar .search-right {
            margin: 0 -51px !important;

        }

        .navbar .search-right a {
            font-weight: 600;
            color: #000000;
        }



        .mainDiv {
            display: flex;
            flex-wrap: wrap;
        }

        .card {
            height: 100px;
            width: 150px;
            margin: 5px;
            box-shadow: 3px 3px green;
            background-color: none !important;
            background: none !important;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
        }

        .card-body {
            text-align: center;
        }

        .headings {
            display: flex;
            border: 1px solid #aaa;
            justify-content: space-between;
            padding: 5px;
        }

        .smallheadings {
            border: 1px solid #aaa;
            padding: 2px;
            text-align: center;

        }

        .prodName {}

        tr th {
            text-align: center;
        }

        tr td {
            text-align: center;
        }

        tr td:nth-child(1) {
            border: 1px solid #aaa;
            padding: 2px;
            text-align: center;
        }

        tr {
            margin: 3px 0px !important;
        }

        .newflex {
            display: flex;
            border: 1px solid #aaa;
            padding: 10px;
            margin: 10px 0px 20px 0px;
            border-radius: 10px;
            cursor: pointer;
            transition: .5s;

        }

        .newflex:hover {
            background-color: green;
            color: #fff;
            transition: .5s;
        }

        .newTable {
            /* height: 320px; */
        }

        .newflex-1 {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #aaa;
            margin-top: 10px;
            padding: 10px 0px;
        }

        .nav-pills .nav-item .nav-link {
            background: none !important;
        }

        .nav-pills .nav-item .nav-link:hover {
            background: green !important;
            color: #fff;
        }

        .nav-pills .nav-item .nav-link.active {
            border: 1px solid green;

        }

        .ownClasses {
            background-color: #fff;
            color: #333;
        }

        .mainWorkDIv {
            position: absolute;
            width: 90%;
            bottom: 0;

        }

        @media only screen and (max-width: 600px) {
            .ownClasses {
                position: relative !important;
            }

            .mainDiv {
                flex-wrap: wrap;
                justify-content: center;
            }


        }

        .nav-pills {
            margin-top: 10px;
        }

        .customBack {

            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .nav-pills {
                justify-content: center;
            }

            .smallheadings {
                padding: 0px;
            }

            tr th {
                font-size: 12px;

            }

            tr td {
                font-size: 12px;
            }

            .myspan {
                font-size: 12px;
            }

            .newTable {
                /* height: 160px; */
            }

            body {
                height: 100% !important;
            }

            .mainWorkDIv {
                position: relative;
                width: 100%;
                bottom: 0;

            }
        }

        .card:nth-child(2) {
            height: 100px;
            width: 150px;
            margin: 5px;
            box-shadow: 3px 3px blue;
            background-color: none !important;
            background: none !important;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
        }

        .card:nth-child(3) {
            height: 100px;
            width: 150px;
            margin: 5px;
            box-shadow: 3px 3px red;
            background-color: none !important;
            background: none !important;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
        }

        .card:nth-child(4) {
            height: 100px;
            width: 150px;
            margin: 5px;
            box-shadow: 3px 3px yellowgreen;
            background-color: none !important;
            background: none !important;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
        }

        .card:nth-child(5) {
            height: 100px;
            width: 150px;
            margin: 5px;
            box-shadow: 3px 3px pink;
            background-color: none !important;
            background: none !important;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
        }

        .card:nth-child(6) {
            height: 100px;
            width: 150px;
            margin: 5px;
            box-shadow: 3px 3px hotpink;
            background-color: none !important;
            background: none !important;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
        }

        .myflex {
            display: flex;
            justify-content: space-between;
            margin: 3px 0px;
        }

        .myflex input {
            width: 150px;
        }

    </style>
</head>

<body class="customBack" style="background-color: #000000 !important; height:100vh;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 ">

                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-one" role="tab"
                            aria-controls="pills-home" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-two" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-three" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-four" role="tab"
                            aria-controls="pills-home" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-five" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Category</a>
                    </li>



                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">

                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade " id="pills-one" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="mainDiv">
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    hello
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 ownClasses"
                style="border: 1px solid #aaa; border-radius: 10px; height: 100% !important; position: fixed; right: 0;">
                <div class="newflex">
                    <div style="flex: 0.4;" class="childflex">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <div class="childflex">
                        <span class="myspan"> Add Customer
                        </span> </div>
                </div>
                <div class="myflex">
                    <div class="left">
                        <input type="text" placeholder="Id" class="form-control"
                            style="display: inline-block !important;" name="" id="">
                    </div>
                    <div class="right">
                        <input type="text" placeholder="Contact" class="form-control"
                            style="display: inline-block !important;" name="" id="">

                    </div>
                </div>
                <input type="text" placeholder="Name" class="form-control" style="display: inline-block !important;"
                    name="" id="">

                <input type="text" placeholder="Last Balance" class="form-control"
                    style="display: inline-block !important; margin:3px 0px;" name="" id="">

                <div class="newTable">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="smallheadings">No</th>
                                <th class="prodName">Product Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Zinger Burger</td>
                                <td>$3.0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chiken Burger</td>
                                <td>$3.0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mainWorkDIv">
                    <div class="newflex-1">
                        <div class="childflex ">
                            <span class="ewfont">
                                Discount
                            </span>
                        </div>
                        <div class="childflex">
                            $0.00
                        </div>
                    </div>

                    <div class="newflex-1">
                        <div class="childflex">
                            <span class="ewfont">
                                VAT
                            </span> </div>
                        <div class="childflex">
                            $5.20
                        </div>
                    </div>

                    <div class="newflex-1">
                        <div class="childflex">
                            <span class="ewfont">
                                Service Charges
                            </span>
                        </div>
                        <div class="childflex">
                            $3.90
                        </div>
                    </div>
                    <button class="btn btn-success w-100 mt-1">
                        Charge <span>$10.50</span>
                    </button>
                </div>

            </div>
        </div>
    </div>



    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {

            autoType(".type-js", 200);
        });

    </script>

    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>

    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>

    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });

    </script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Order Now";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

    </script>
</body>

</html>
