<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3d Card Effect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            perspective: 1000px;
        }

        .container {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            transform-style: preserve-3d;
            min-height: 100vh;
            width: 35rem;
            border-radius: 30px;
            padding: 0rem 5rem;
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2), 0px 0px 50px rgba(0, 0, 0, 0.2);
        }

        .sneaker {
            min-height: 35vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sneaker img {
            width: 20rem;
            z-index: 2;
            transition: all 0.75s ease-out;
        }

        .circle {
            width: 15rem;
            height: 15rem;
            background: linear-gradient(to right,
                    rgba(245, 70, 66, 0.75),
                    rgba(8, 83, 156, 0.75));
            position: absolute;
            border-radius: 50%;
            z-index: 1;
        }

        .info h1 {
            font-size: 3rem;
            transition: all 0.75s ease-out;
        }

        .info h3 {
            font-size: 1.3rem;
            padding: 2rem 0rem;
            color: #585858;
            font-weight: lighter;
            transition: all 0.75s ease-out;
        }

        .sizes {
            display: flex;
            justify-content: space-between;
            transition: all 0.75s ease-out;
        }

        .sizes button {
            padding: 0.5rem 2rem;
            background: none;
            border: none;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
            color: #585858;
        }

        button.active {
            background: #585858;
            color: white;
        }

        .purchase {
            margin: 1rem;
            transition: all 0.75s ease-out;
        }

        .purchase button {
            width: 100%;
            padding: 1rem 0rem;
            background: #f54642;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 30px;
            font-weight: bolder;
        }
        
        .purchases {
            margin: 1rem;
            transition: all 0.75s ease-out;
        }

        .purchases button {
            width: 100%;
            padding: 1rem 0rem;
            background: #0abf53;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 30px;
            font-weight: bolder;
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

    </style>
</head>

<body>
 
    <div class="container">
        <div class="card">
            <div class="sneaker">
                <div class="circle"></div>
                <img src="{{asset('assets/img/burger_sandwich_PNG4135.png')}}" alt="adidas">

            </div>
            <div class="info">
                <h1 class="title">Welcome</h1>
                <h3>FUTURE-READY TRAINERS WITH WRAPPED BOOST FOR EXCEPTION COMFORT.</h3>
                <div class="sizes">
                    <button>Your Id</button>
                    <button>40</button>
                    <button class="active">Rank</button>
                    <button>44</button>

                </div>
                <br>
                <div class="mainCoins" style="display: flex; justify-content: space-evenly;">
                    <div class="left" style="border: 1px solid #aaa; border-radius: 50px; padding: 10px; ">
                        Coins
                    </div>
                    <div class="right" style="border: 1px solid #aaa; border-radius: 50px; padding: 10px; background-color: #aaa; color: #fff;">
                        1500
                    </div>
                </div>
                <div class="purchase">
                    <button>Purchase</button>
                </div>
                <div class="purchases">
                    <button data-toggle="modal" data-target="#myModal">Refer Friend</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: none;border: none;">

                <div class="container-fluid">



                    <div class="modal-body">
                        <div class="login-box">

                            <form>

                                <div class="user-box">
                                    <input type="text" name="" required="">
                                    <label>Friend Name</label>
                                </div>

                                <div class="user-box">
                                    <input type="tel" name="" required="">
                                    <label>Contact</label>
                                </div>


                                <a href="#" data-dismiss="modal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Submit
                                </a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        //Movement Animation to happen
        const card = document.querySelector(".card");
        const container = document.querySelector(".container");
        //Items
        const title = document.querySelector(".title");
        const sneaker = document.querySelector(".sneaker img");
        const purchase = document.querySelector(".purchase");
        const purchases = document.querySelector(".purchases");
        const description = document.querySelector(".info h3");
        const sizes = document.querySelector(".sizes");

        //Moving Animation Event
        container.addEventListener("mousemove", (e) => {
            let xAxis = (window.innerWidth / 2 - e.pageX) / 25;
            let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
            card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });
        //Animate In
        container.addEventListener("mouseenter", (e) => {
            card.style.transition = "none";
            //Popout
            title.style.transform = "translateZ(50px)";
            sneaker.style.transform = "translateZ(100px) rotateZ(-45deg)";
            description.style.transform = "translateZ(75px)";
            sizes.style.transform = "translateZ(70px)";
            purchase.style.transform = "translateZ(75px)";
            purchases.style.transform = "translateZ(75px)";
        });
        //Animate Out
        container.addEventListener("mouseleave", (e) => {
            card.style.transition = "all 0.5s ease";
            card.style.transform = `rotateY(0deg) rotateX(0deg)`;
            //Popback
            title.style.transform = "translateZ(0px)";
            sneaker.style.transform = "translateZ(0px) rotateZ(0deg)";
            description.style.transform = "translateZ(0px)";
            sizes.style.transform = "translateZ(0px)";
            purchase.style.transform = "translateZ(0px)";
            purchases.style.transform = "translateZ(0px)";
        });
    </script>
</body>

</html>