<!DOCTYPE html>

<html lang="en">


<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Walk in Customer</title>
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <style>
#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 44mm;
  background: #FFF;
  
  
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;} 
#bot{ min-height: 50px;}

#top .logo{
  //float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
	background-size: 60px 60px;
}
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 5mm;
}

  
  
}



        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        @-moz-document url-prefix() {

            input {
                width: 150px;

            }

            #prod-1-contact {
                width: 155px;
            }

            #prod-1-category {
                width: 155px;

            }
        }



        .inv-bor-btns {
            text-align: center !important;
            margin-top: 10px;
        }

        #kt_bodys .okay-invo label {
            font-size: 13px !important;
            width: 100px;
        }

        .okay-invo-1 label {
            font-size: 14px !important;
        }

        .bootstrap-select .dropdown-toggle {
            width: 182px;
            height: 33px !important;

            color: #ffffff !important;
        }


        .bootstrap-select .dropdown-toggle .filter-option {
            position: absolute;
            top: -5px !important;
            left: 0;
            color: #ffffff;
            padding-top: inherit;
            padding-right: inherit;
            padding-bottom: inherit;
            padding-left: inherit;
            height: 100%;
            width: 100%;
            text-align: left;
        }

        .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
            color: black;

        }

        .okay-invo-3 label {
            font-size: 15px !important;

        }

        .okay-invo-3 input {
            width: 150px !important;
        }

        input {
            border-color: #aaaaaa !important;
        }

        .input-field input {
            border: none !important;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
.printBody{
    border-color: #aaaaaa !important;
    width: 50mm;
    height: 80mm;

}

















        .btn:hover {
            color: #fff;
        }


        .dropdown-toggle::after {
            transition: transform 0.15s linear;
        }

        .show.dropdown .dropdown-toggle::after {
            transform: translateY(3px) !important;
        }



        .btn-bill-1 {
            background-color: #ff4400;
            padding: 5px 35px;
            margin: 10px 0px;
            float: right;

        }


    @media print and (width: 21cm) and (height: 29.7cm)
     {
       
}
.printmyDiv {
        background-color: red;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
        .main-cards-10 {
            padding: 10px;
        }

        .clear {
            clear: both;
        }

        .bill-content .container {
            max-width: 1360px;
        }

        .btn-back-1 {
            background-color: #333;
        }

        .main-cards-card {
            padding: 10px;
        }

        .main-cards-card .row {
            margin: 10px 0px;
        }

        .main-cards-cust {
            padding: 10px;
        }

        .main-cards-cust .row {
            margin: 10px 0px;
        }

        .main-cards-10 .row {
            margin: 10px 0px;
        }

        .row-games {
            /* padding: 10px; */
        }

        /* .complete {
    background-color: #;
} */

        .my-div {
            background-color: #ffffff;
            height: 300px;
            padding: 20px;
            border-radius: 20px;
        }

        .group-tables thead {
            background-color: #FF8C00;

        }

        table th {
            border: 1px solid rgb(196, 218, 243);
            padding: 5px;
        }

        table td {
            border: 1px solid rgb(196, 218, 243);
            padding: 5px;

        }

        /* thead tr th {
			border-right: 1px solid #333;
		} */

        .input-games .row {
            margin: 10px 0px;
        }

        .btn-save {
            background-color: #ff4400;

            width: 150px;
            margin: 5px 0px;
            color: #fff;

        }


        .btn-save:hover {
            color: #fff;
        }


        .btn {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .complete {
                text-align: center;
                margin: 0 auto;
            }

            #last-balance {
                margin: 10px 0px !important;
            }

            .bill-content .container {
                max-width: auto;
            }

            #customer {
                margin: 10px 0px !important;

            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .myLabel header label {
            width: 120px;
            font-size: 14px;
        }

        .myLabel fieldset {
            border: 1px solid #333;
            padding: 10px;
        }

        .myLabel legend {
            width: auto;
        }

        .myLabel .btn-order {
            background-color: rgb(85, 168, 8);

        }

        .myLabel .btn-my {
            float: right;
            width: 180px;
            font-size: 14px;
        }

        .myLabel .main-section label {
            width: 120px;
            font-size: 10px;
        }

        .myLabel .main-3 label {
            width: 120px;
            font-size: 10px;

        }

        .myLabel fieldset input {
            height: 20px;
        }

        .myLabel fieldset label {
            font-size: 10px !important;
        }


        .stocks input::placeholder {
            padding-left: 10px;
        }

        .stocks .table-section {
            border: 1px solid #333;
        }

        .stocks .myTable {
            margin: 30px 0px;
        }

        .my-main-tables {
            height: 425px !important;
        }


        .labels label {
            width: 120px;
            font-size: 14px;
        }

        .labels fieldset {
            border: 1px solid #333;
            padding: 20px;
        }

        .labels legend {
            width: auto;
        }

        .labels .btn-order {
            background-color: rgb(85, 168, 8);

        }

        .labels .btn-my {
            float: right;
        }

        .invoice-head-1 input {
            height: 20px;
            width: 120px;
        }

        .invoice-head-1 label {
            font-size: 11px;
            width: 150px;
        }

        .inv-border {
            border: 1px solid #333;
            padding: 5px;
        }

        .inv-border-1 label {
            width: 80px;
        }

        .inv-border-1 {
            border: 1px solid #333;
            padding: 5px;

        }

        .invoice-succ {
            display: inline-block;
        }

        .btn-inv-btn {
            height: 21px;

        }

        .inv-border-1 label {
            font-size: 11px;
        }



        .text-center .btn {
            width: 100px;
            font-size: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .AZD label {
            width: 83px;
            font-size: 12px;
        }

        .AZD a {
            text-decoration: none;
        }

        .main-cof a {
            background-color: #f9f9f9;
            padding: 15px;
            display: inline-block;
            margin: 10px 0px;
        }

        .main-ids input {


            margin: 10px 0px;

        }

        #sub {
            display: block;

        }

        .cent {
            text-align: center !important;
        }



        .clear {
            clear: right;
        }








        td input {
            border: none;
            outline: none;
        }

        .container {
            max-width: 1350px;
        }

        .text-center .btn {
            font-size: 11px;
            letter-spacing: .3px;
            font-weight: 400;

        }





        .okay-invo {
            border: 1px solid rgb(196, 218, 243);
            border-radius: 10px;
            padding: 10px 10px;
        }

        .okay-invo label {
            width: 110px;
        }



        .ctrl-1 {
            width: 93px;
            font-size: 9px;
        }

        .okay-invo-1 label {
            width: 111px;

        }

        .o-inv {
            float: left;
            margin-right: 7px;
        }

        .o-inv-2 {
            float: right;

        }


        .dropdown {
            width: 120px !important;



        }

        /* .select{
    height: 20px !important;
    width: 120px !important;
} */
        .bs-placeholder.btn {
            border: 1px solid #222 !important;
        }

        #kt_bodys input {
            border: 1px solid #222;
        }

        #kt_bodys .okay-invo label {
            font-size: 10px;
            width: 100px;
        }

        #kt_bodys .okay-invo .modal-content label {
            font-size: 10px;
            width: 190px;
        }

        #kt_bodys .okay-invo-1 label {
            font-size: 10px;
        }

        #kt_bodys .okay-invo-3 label {
            font-size: 10px;
        }

        .okay-invo-3 label {
            width: 100px;
        }

        .myGoggle {
            border: 1px solid rgb(196, 218, 243);
            height: 425px;
            border-radius: 10px;
        }

        .inv-bor-btns {
            text-align: right;
            margin-top: 10px;
        }

        .inv-bor-btns button {
            width: 90px;
        }

        .centhour {
            text-align: center;
            margin-top: 10px;
        }

        .centhour button {
            width: 90px !important;
        }

        #prod-hour {
            visibility: hidden;
        }



        /* add */

        /* .forms-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    
    
    } */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
    overflow: hidden;
} */

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;


        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title {
            font-size: 2.2rem;
            color: #444;
            margin-bottom: 10px;

        }

        .input-field {
            max-width: 380px;
            width: 80%;
            height: 40px;
            background-color: #f0f0f0;
            margin: 5px 0;

            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 .5rem;
        }

        .input-field a {
            text-align: center;
            line-height: 40px;
            color: #FF8C00;
            font-size: 1.1rem;


        }

        select {
            background: none;
            outline: none;
            border: none;

            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        #holdPlz {
            display: none;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;

            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        .input-field input::placeholder {
            color: #aaa;
            font-weight: 500;
        }



        .social-text {
            padding: .7rem 0;
            font-size: 1rem;
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            height: 46px;
            width: 46px;
            border: 1px solid #333;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            border-radius: 50%;
            transition: 0.3s;
        }

        .social-icon:hover {
            color: #FF8C00;
            border-color: #e24911;
        }

        .header-data {
            position: relative;
            height: 100vh;
            width: 100vw;
        }

        .header-data-main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .header-data-main button {
            margin: auto 7px;
        }

        .btn-org {
            background-color: #ff4400;
        }

        .btn-org-2 {
            color: #FF8C00;
            border: 1px solid #FF4500;
        }

        .btn-org-2:hover {
            background-color: #FF4500;
            color: #fff;
        }

        .btn-org:hover {
            color: #fff;
        }

        .btn-org-1 {
            background-color: #FF8C00;
        }

        .btn-submit {
            margin-top: 10px;

        }

        .btn-submit:hover {
            color: #fff;
        }

        .modal {
            overflow: hidden;
        }

        .modal-title {
            /* font-size: 44px; */
        }

        #kt_body .sign-in-form input {
            border: none !important;
        }

        #gross {
            height: 3em !important;
        }

        #a-paid {
            height: 2.5em;
            margin-top: 7px !important;
        }

        #R-balance {
            height: 2.5em !important;
        }



        .total-buttons {
            margin-top: 10px;
        }

        .hye-1 {
            border: 1px solid rgb(196, 218, 243);
            height: 430px;
            border-radius: 10px;

        }

        .okay-invo-1 {
            border: 1px solid rgb(196, 218, 243);
            padding-top: 10px;
            border-radius: 10px;

        }

        .bg-success {
            background-color: #28a745 !important
        }

        .btn.btn-primary:hover {
            border-color: #007bff;
        }



        @media only screen and (max-width: 1024px) {
            .o-inv-2 {
                float: left;
            }

            .o-inv-2 label {
                width: 111px;
                text-align: left;
            }

            .o-inv {
                /* width: 100px; */
                text-align: left;
            }

            .inv-bor-btns {
                text-align: center;
            }

            .inv-bor-btns button {
                margin: 5px 0px;
            }

            .clear {
                clear: left;
            }


            /* .okay-invo #invo-1 {
                width: 100px !important;
            } */

            .okay-invo label {
                width: 90px;
            }

            .okay-invo #prod-1 {
                width: 100px !important;
            }

            .okay-invo label {
                font-size: 8px;
            }

            .centhour button {
                width: 70px !important;
                font-size: 10px;
            }

            .okay-invo-1 label {
                width: 60px !important;
                font-size: 7px;

            }

            .total-buttons button {
                width: 48px;
                height: 40px;
                font-size: 10px;
            }

            .total-buttons {
                margin-top: 10px;
            }

            .myGoggle {
                height: 477px;

            }

            .inv-bor-btns {
                margin-top: 10px;
            }
        }


        .registration-form {
            padding: 0px 0;
            /* background-color: #fff; */

        }

         /* {
            height: 60px;
           outline:none !important;
            background-color: #33cc33; 
            border: none;
            border-radius: 10px;
            color: white;
            padding: 8px 22px;
            text-align: center;
        margin:5px;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            box-shadow: 10px 10px 20px -12px rgba(0,0,0,0.63);
-webkit-box-shadow: 10px 10px 20px -12px rgba(0,0,0,0.63);
-moz-box-shadow: 10px 10px 20px -12px rgba(0,0,0,0.63);
        } */
        #categories{
        display: flex;
        flex-wrap: wrap;
        }
        #products{
            display: flex;
        flex-wrap: wrap;
        }
        .productBtn{
           
  position: relative;
  margin: 0;
  padding: 5px 12px;
  height: 60px;
  width: 150px;
  outline: none;
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  text-transform: uppercase;
  background-color: #ffffff;
  border: 1px solid rgba(22, 76, 167, 0.6);
  border-radius: 10px;
  color: #1d89ff;
  font-weight: 400;
  font-size: 20px;
  font-family: inherit;
  z-index: 0;
  overflow: hidden;
  transition: all 0.3s cubic-bezier(0.02, 0.01, 0.47, 1);
  margin: 5px ;
 
        }
        .productBtn span {
  color: #164ca7;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.7px;
}
.productBtn:hover {
  animation: rotate 0.7s ease-in-out both;
}
.productBtn:hover span {
  animation: storm 0.7s ease-in-out both;
  animation-delay: 0.06s;
}
  
        .catBtn {
  position: relative;
  margin: 0;
  padding: 5px 12px;
  height: 60px;
  width: 150px;
  outline: none;
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  text-transform: uppercase;
  background-color: #ffffff;
  border: 1px solid rgba(22, 76, 167, 0.6);
  border-radius: 10px;
  color: #1d89ff;
  font-weight: 400;
  font-size: 20px;
  font-family: inherit;
  z-index: 0;
  overflow: hidden;
  transition: all 0.3s cubic-bezier(0.02, 0.01, 0.47, 1);
  margin: 5px ;
}
.catBtn span {
  color: #164ca7;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.7px;
}
.catBtn:hover {
  animation: rotate 0.7s ease-in-out both;
}
.catBtn:hover span {
  animation: storm 0.7s ease-in-out both;
  animation-delay: 0.06s;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
  25% {
    transform: rotate(3deg) translate3d(0, 0, 0);
  }
  50% {
    transform: rotate(-3deg) translate3d(0, 0, 0);
  }
  75% {
    transform: rotate(1deg) translate3d(0, 0, 0);
  }
  100% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
}
@keyframes storm {
  0% {
    transform: translate3d(0, 0, 0) translateZ(0);
  }
  25% {
    transform: translate3d(4px, 0, 0) translateZ(0);
  }
  50% {
    transform: translate3d(-3px, 0, 0) translateZ(0);
  }
  75% {
    transform: translate3d(2px, 0, 0) translateZ(0);
  }
  100% {
    transform: translate3d(0, 0, 0) translateZ(0);
  }
}
.btn-pill:before, .btn-pill:after {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #1d89ff;
  content: "";
  opacity: 0;
  transition: transform 0.15s cubic-bezier(0.02, 0.01, 0.47, 1), opacity 0.15s cubic-bezier(0.02, 0.01, 0.47, 1);
  z-index: -1;
  transform: translate(100%, -25%) translate3d(0, 0, 0);
}
.btn-pill:hover:before, .btn-pill:hover:after {
  opacity: 0.15;
  transition: transform 0.2s cubic-bezier(0.02, 0.01, 0.47, 1), opacity 0.2s cubic-bezier(0.02, 0.01, 0.47, 1);
}
.btn-pill:hover:before {
  transform: translate3d(50%, 0, 0) scale(0.9);
}
.btn-pill:hover:after {
  transform: translate(50%, 0) scale(1.1);
}

.btn-shine {
  border: 1px solid;
  overflow: hidden;
  position: relative;
}
.btn-shine span {
  z-index: 20;
}
.btn-shine:after {
  background: #38ef7d;
  content: "";
  height: 155px;
  left: -75px;
  opacity: 0.4;
  position: absolute;
  top: -50px;
  transform: rotate(35deg);
  transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
  width: 50px;
  z-index: -10;
}
.btn-shine:hover:after {
  left: 120%;
  transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
}

.btn-slide-line.center:after {
  left: 50%;
}
.btn-slide-line:after {
  position: absolute;
  right: 0;
  left: auto;
  transition: 0.3s;
  content: "";
  width: 0;
  bottom: 0;
  height: 3px;
  background: #164ca7;
}
.btn-slide-line:hover {
  cursor: pointer;
}
.btn-slide-line:hover:after {
  width: 100%;
  left: 0;
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
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
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

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }



        @media only screen and (max-width: 768px) {


            .okay-invo-1 label {
                width: 120px !important;
                font-size: 7px;
                text-align: left !important;

            }

            .dropdown {
                width: auto !important;
            }

            .o-inv-2 {
                margin-left: 20px;
            }

        }

        @media only screen and (max-width: 686px) {

            .o-inv-2 {
                margin-left: 0px;
            }

        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            /* .okay-invo-hide {
                display: none;
            } */


        }




        /* your css rules for ipad landscape */


        @media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {

            .okay-invo-hide {
                display: none;
            }

            .okay-invo {
                width: 100% !important;
            }

            .o-inv-2 {
                margin-left: 0px;
            }


        }

        @media only screen and (max-width: 768px) {

            .overFlowingTable table thead th {
                font-size: 10px !important;
            }



        }

        /* Landscape*/

        @media only screen and (min-device-width: 1366px) and (max-device-height: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {}

        /* Portrait*/
        @media only screen and (min-device-width: 1024px) and (max-device-height: 1366px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {

            .okay-invo-hide {
                display: none;
            }

            .o-inv-2 {
                margin-left: 0px;
            }
        }


        @media screen and (device-aspect-ratio: 40/71) {
            #InvoiceID {
                width: 150px !important;
            }

            #invo-1 {
                width: 150px !important;
            }
        }

        @media screen and (device-aspect-ratio: 16/9) {
            .okay-invo-hide {
                display: none;
            }
        }

        @media only screen and (max-width: 1197px) {
            .okay-invo-hide {
                display: none;
            }
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none !important;
            margin: 0 !important;

        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
            margin: 0;
        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }



        .dropdown {
            width: 130px;
        }

        .okay-invo-3 .bootstrap-select .dropdown-toggle {
            width: 155px !important;
            height: 30px !important;

        }

        #paidme {
            width: 129px;
        }

        .dropdown {
            height: 0px !important;
        }

        .mainHeadings {
            font-size: 25px;
            margin-bottom: 14px;
        }

        .okay-invo input {
            width: 179px;
        }

        .o-inv input {
            width: 179px;
        }

        .o-inv-2 input {
            width: 179px !important;
        }

        .okay-invo-2 .bootstrap-select .dropdown-toggle {
            width: 195px !important;
            height: 30px !important;

        }

        .okay-invo-2 .dropdown {
            width: 0px !important;
        }

        @media (max-width: 1366px) {
            .okay-invo input {
                width: 107px;
            }

            .o-inv input {
                width: 107px;
            }

            .o-inv-2 input {
                width: 107px;
            }

            .o-inv-2 {
                float: none;
            }

            .centhour button {
                width: 70px !important;
            }

            .okay-invo-3 label {
                width: 80px !important;
            }

            .total-buttons button {
                height: 35px !important;
                width: 75px !important;
            }

            body {
                overflow-x: hidden !important;
            }

            .okay-invo-3 .dropdown {
                width: 150px !important;
            }

            #paidme {
                width: 79px !important;
            }

            .bootstrap-select .dropdown-toggle {
                width: 107px;
                height: 33px !important;

                color: #ffffff !important;
            }

            .o-inv-2 input {
                width: 107px !important;
            }

        }

        /* .dt-button  */

        .buttons-print {
            padding: 10px 25px;
            background-color: #0a549d;
            color: #ffffff;
        }

        @media (max-width: 480px) {
            .inner-block {
                padding: .5em 1em 2em 1em !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .okay-invo input {
                width: 179px;
            }

            .o-inv input {
                width: 179px;
            }

            .o-inv-2 input {
                width: 179px !important;
            }

            .bootstrap-select .dropdown-toggle {
                width: 179px;
                height: 33px !important;
                color: #ffffff !important;
            }

            .okay-invo-3 input {
                width: 179px !important;
            }

            element.style {
                background-color: #0a549d;
            }

            .btn:not(:disabled):not(.disabled) {
                cursor: pointer;
            }


        }

        .total-buttons button {
            margin: 5px 0px;
            width: 75px !important;
            height: 35px !important;
        }

        .okay-invo-1 input {
            width: 107px;
        }
        @media print {
            .left-content{
                width: 100% !important;
            }
            .sidebar-menu{
                display: none;
            }
            body * {
                visibility: hidden;
            }

            #mainHeader,
            #mainHeader * {
                visibility: visible;
            }

            #mainHeader {
                position: absolute;
                left: 0;
                top: 0;
            }
            #mainComapnyLedger{
                visibility: visible !important;
                margin: 10px 0px;
            }
            #DNone{
                display: none !important;
            }
            table{
                width: 900px !important;
            }
          
       
        }

    </style>
</head>


<body id="kt_bodys" onload="getCategories()">
    @include('saleshtml')
    @include('numericKeyboard') 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#myTables').DataTable();
        });

    </script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#searchProductTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute",

                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative",

                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>



    <script>
        function getAllInvoiceDetails() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    
                    var a = JSON.parse(data);

                    document.getElementById("CID").value = a[0].CustomerID;
                    document.getElementById("LastBalance").value = a[0].Balance;
                    document.getElementById("ProductName").value = a[0].ProductName;
                    document.getElementById("Quantity").value = a[0].Quantity;
                    document.getElementById("TotalCost").value = a[0].TotalCost;
                    document.getElementById("Total").value = a[0].TotalAmount;
                    document.getElementById("CurrentBalance").value = a[0].Balance;
                    
                    calc();
                    document.getElementById("CNO").value = a[0].Contect;
                    
                    document.getElementById("CustomerName").value = a[0].CustomerID;
                    var i = 0;
                    
                    var table = document.getElementById("ProductSaleTable");
                    table.innerHTML = "<thead>\
                            <tr>\
                                <th>Product ID</th>\
                                <th>Product Name</th>\
                                <th>Company</th>\
                                <th>Sale Price</th>\
                                <th>Quantity</th>\
                                <th>Discount</th>\
                                <th>Total</th>\
                                <th>Action</th>\
                            </tr>\
                        </thead>";

                    for (i; i < a.length; i++) {
                        var PID = a[i].ProductSerial;
                        var discount = a[i].Discount;
                        var quantity = a[i].Quantity;
                        
                        var salePrice = a[i].SalePrice;
                        var company = a[i].Company;
                        var productName = a[i].ProductName;
                        var totalAmount = a[i].NetAmount;

                        var row = table.insertRow(-1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                        var cell7 = row.insertCell(6);
                        var cell8 = row.insertCell(7);

                        cell1.innerHTML = PID;
                        cell2.innerHTML = productName;
                        cell3.innerHTML = company;
                        cell4.innerHTML = salePrice;
                    //     cell5.innerHTML =
                    //     '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
                    // cell6.innerHTML =
                    //     '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=0.0>';
                        cell5.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value='+quantity+'>';
                        cell6.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value='+discount+'>';
                        cell7.innerHTML = totalAmount;
                        //calc();
                        cell8.innerHTML =
                            "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>"
                    }

                }
            }
            var invoiceNumber = document.getElementById("InvoiceID").value;

            xhttp.open("GET", "./getAllInvoiceDetails/" + invoiceNumber, true);
            xhttp.send();
        }

        function getInvoiceCustomer() {
            document.getElementById("saveBtn").disabled = true; 
            document.getElementById("updateBtn").disabled = false; 

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                 
                    var a = JSON.parse(data);
                    document.getElementById("CID").value = a[0].CustomerID;
                    document.getElementById("LastBalance").value = a[0].Balance;
                    document.getElementById("CurrentBalance").value = a[0].Balance;
                    document.getElementById("CNO").value = a[0].Contect;
                    
                    document.getElementById("ProductName").value = a[0].ProductName;
                    document.getElementById("Quantity").value = a[0].Quantity;
                    document.getElementById("TotalCost").value = a[0].TotalCost;
                    document.getElementById("Total").value = a[0].TotalAmount;
                    document.getElementById("DiscountOverall").value = a[0].Discount;
                    grossTotal = Number(a[0].TotalAmount)-Number(a[0].Discount);
                    document.getElementById("grossTotal").value = grossTotal;
                    document.getElementById("tax").value = a[0].VAT;
                    document.getElementById("NetTotal").value = a[0].NetTotal;
                    document.getElementById("AmountPaid").value = a[0].AmountPaid;
                    document.getElementById("RemainingBalance").value = a[0].Balance;
                    document.getElementById("CoinsToBeUsed").value = a[0].CoinsUsed;
                    document.getElementById("coinsDiscounts").value = a[0].CoinsDiscount;
                    $('#CustomerName').val(a[0].CustomerID);
                    $('#CustomerName').selectpicker('refresh');
                    showdata();
                   

                    var i = 0;
                  
                    var table = document.getElementById("ProductSaleTable");
                    table.innerHTML = "<thead>\
                            <tr>\
                                <th>Product ID</th>\
                                <th>Product Name</th>\
                                <th>Sale Price</th>\
                                <th>Quantity</th>\
                                <th>Discount</th>\
                                <th>Total</th>\
                                <th>Action</th>\
                            </tr>\
                        </thead>";

                    for (i; i < a.length; i++) {
                        var PID = a[i].ProductSerial;
                        var discount = a[i].DiscountOffered;
                        var quantity = a[i].Quantity;
                        var PerUnitSalePrice = a[i].PerUnitSalePrice;
                        var productName = a[i].ProductName;
                        var totalAmount = a[i].NetAmount;

                        var row = table.insertRow(-1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                        var cell7 = row.insertCell(6);
                        

                        cell1.innerHTML = PID;
                        cell2.innerHTML = productName;
                        
                        cell3.innerHTML = PerUnitSalePrice;
                        cell4.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value='+quantity+'>';
                        cell5.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value='+discount+'>';
                        // cell5.innerHTML = "<input type='Text' value='"+quantity+"'>";
                        // cell6.innerHTML = "<input type='Text' value='"+discount+"'>";
                        cell6.innerHTML = totalAmount;
                        //calc();
                        cell7.innerHTML =
                            "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>"

                    }
                }
            };
            var invoiceNumber = document.getElementById("InvoiceID").value;

            xhttp.open("GET", "./getInvoiceCustomer/" + invoiceNumber, true);
            xhttp.send();


        }

        function pageReload(){
            location.reload(); 
        }

        function getAllInvoices() {
            document.getElementById("updateBtn").disabled = true; 
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                   
                    var table;
                    var a = JSON.parse(data);
                    
                    table = $('#searchProductTable').DataTable();
                    //table = document.getElementById("searchProductTable")
                    $.each(a, function (i, item) {

                        table.row.add([a[i].InvoiceNumber, a[i].CustomerName, a[i]
                            .ProductName, a[i].PerUnitSalePrice
                            
                        ]);
                    });
                    table.draw();
                }
            };

            xhttp.open("GET", "./getAllInvoices", true);
            xhttp.send();
           


        };



        function loadAllCustomers() {



            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("CustomerName").innerHTML =
                        this.responseText;
                    $('#CustomerName').selectpicker('refresh');

                }
            };

            xhttp.open("GET", "./getAllCustomers", true);
            xhttp.send();
        };

        function getCurrentCustomerInfo() {
            showdata();
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    var a = JSON.parse(data);
                    document.getElementById("CID").value = a[0].CustomerID;
                    document.getElementById("LastBalance").value = a[0].Balance;
                    document.getElementById("CurrentBalance").value = a[0].Balance;
                    calc();
                    document.getElementById("CNO").value = a[0].Contect;
                    




                }  
            };
            var CustomerID = $('#CustomerName').find(":selected").val();

            xhttp.open("GET", "./getCustomersInfo/" + CustomerID, true);
            xhttp.send();


        }

        function loadAccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    //document.getElementById("accounts").innerHTML = this.response;
                    //$('#accounts').selectpicker('refresh');
                }
            };
            
            xhttp.open("GET", "./getAccountHeads/", true);

            xhttp.send();
        }

        function AddCustomer() {

            var CustomerName = document.getElementById("CustomerName").value;
            

            var password = document.getElementById("password").value;
         

            var CustomerContact = document.getElementById("Contact").value;
            


            var CustomerProfession = document.getElementById("Profession").value;
        

            var CustomerBalance = 0;
            

            var CustomerAddress = document.getElementById("Address").value;
         

            var CustomerComments = document.getElementById("Comments").value;
           

            var Customer = [CustomerName, password, CustomerContact, CustomerProfession, CustomerBalance,
                CustomerAddress,
                CustomerComments
            ];

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                   
                    
                    
                }
            };
            var EC = JSON.stringify(Customer);
            xhttp.open("GET", "./addCustomer/" + EC, true);
            xhttp.send();
            

        };


        function getInvoiceID() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("InvoiceID").value = this.response;
                }
            };
            
            xhttp.open("GET", "./getInvoiceID", true);

            xhttp.send();


        }



        $(document).ready(function () {
        
            $("#searchProductTable").on('click', 'tr', function () {
            
                var invoiceNumber = this.cells[0].innerText; // get current row 1st TD value
                document.getElementById('InvoiceID').value = invoiceNumber;
                getInvoiceCustomer();
            });
                
        });



        function taxCalculation() {

            var taxRate = document.getElementById('tax').value;
            var total = document.getElementById('Total').value;
          
            var tax = Number(total) * (taxRate / 100);
           
            return tax;
        }

        function calc() {

            var table = document.getElementById('ProductSaleTable');
            var rows = table.rows;
            var total = 0;
            var cell;

            // Assume first row is headers, adjust as required
            // Assume last row is footer, addjust as required
            for (var i = 1, iLen = rows.length; i < iLen; i++) {
                cell = rows[i].cells[5];
                total += Number(cell.textContent || cell.innerText);
            }
            document.getElementById('Total').value = total.toFixed(2);
            var discount = document.getElementById('DiscountOverall').value;
            var coinsDiscount = document.getElementById('coinsDiscounts').value;


            var gross = 0;
            gross = (Number(total) - Number(discount) - Number(coinsDiscount));
            document.getElementById('grossTotal').value = gross.toFixed(2);
            var net = 0;
            var tax = 0;
            var tax = taxCalculation();

            document.getElementById('taxAmount').value = tax.toFixed(2);
            net = gross + Number(tax);
           
            document.getElementById('NetTotal').value = net.toFixed(2);
            document.getElementById('AmountPaid').value = net.toFixed(2);

            calcForBalance();
        }


        function RemoveThisRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            
            document.getElementById("ProductSaleTable").deleteRow(i);
            calc();
        }

        function calculationTrigerOnQtyValueChange(x) {

            var theRow = x.parentElement.parentElement;
            var rx = x.parentElement.parentElement.rowIndex; 
            var salePrice = theRow.cells[2].innerText;
            var qty = theRow.cells[3].children[0].value;
            var dis = theRow.cells[4].children[0].value;
            var tot = (salePrice * qty) - dis;
            theRow.cells[5].innerText = tot;
            calc();
            calcForBalance();
        };

        function calcForBalance() {
            document.getElementById("CurrentBalance").value = document.getElementById('LastBalance').value;
            var Ap = document.getElementById('AmountPaid').value;
            var tot = document.getElementById('NetTotal').value
            var RBForInvoice = 0;
            RBForInvoice = (Number(tot) - Number(Ap)).toFixed(2);
            document.getElementById('RemainingBalance').value = RBForInvoice;
            var CustomerLastBalance = document.getElementById('LastBalance').value;
            var newBalance = Number(CustomerLastBalance) + Number(RBForInvoice);
            document.getElementById("CurrentBalance").value = newBalance;
        }

        function IsItemExistInDataTable(item) {
            var table = document.getElementById("ProductSaleTable");
            for (var i = 0, row; row = table.rows[i]; i++) {
                if (item == row.cells[0].innerHTML) {
                    var qty = row.cells[3].children[0].value;
                    qty++;
                    row.cells[3].children[0].value = qty;
                    calculationTrigerOnQtyValueChange(row.cells[3].children[0]);
                    return false;
                }
            }
            return true;
        };


        function insertInSales() {
    var myTrows = [];
    var table = document.getElementById("ProductSaleTable");
    var myRow2 = [];
    $('#ProductSaleTable tr').each(function (row, tr) {
        myTrows[row] = [
            $(tr).find('td:eq(0)').text(), //productID
            $(tr).find('td:eq(2)').text(), //salePrice
            $(tr).find('td:eq(3) input[type="text"]').val(), //qty
            $(tr).find('td:eq(4) input[type="text"]').val(), //discount
            $(tr).find('td:eq(5)').text() //totamount
        ];
    });
    myTrows.shift();
    //var invoiceNumber=getInvoiceID();
    var tot = document.getElementById("Total").value;
    
    var discount = document.getElementById('DiscountOverall').value;
    if (discount == "") {

        discount = 0;
        document.getElementById('DiscountOverall').value = 0;

    }
    
    var CoinsToBeUsed = document.getElementById('CoinsToBeUsed').value;
    var name = $('#CustomerName').find(":selected").text();
    var gross = document.getElementById('grossTotal').value;
    var tax = document.getElementById('tax').value;
    var netTotal = document.getElementById('NetTotal').value;
    var amp = document.getElementById('AmountPaid').value;
    var rmb = document.getElementById("RemainingBalance").value;
    var CID = document.getElementById("CID").value;
    var CLB = document.getElementById("LastBalance").value;
    var CCB = document.getElementById("CurrentBalance").value;
    var coinsDiscount = document.getElementById("coinsDiscounts").value;
    var coinsUsed = document.getElementById("CoinsToBeUsed").value;
    var AID = 1; //$('#accounts').find(":selected").val();
   
    if (tax == "") {
        document.getElementById('tax').value = 0;
    }
    
    if (AID == "") {
        alert("Payment Method not selected");
    }else if (name == " ") {
        alert("Customer not selected");
    }else if (myTrows == "") {
        alert("Please Select a Product");
    }else if (coinsUsed == "" || coinsUsed == undefined || coinsUsed == null) {
        coinsUsed = 0;
    }else if (coinsDiscount == ""|| coinsDiscount == undefined || coinsDiscount == null) {
        coinsDiscount = 0;
    }else if (CoinsToBeUsed == ""|| CoinsToBeUsed == undefined || CoinsToBeUsed == null) {
        CoinsToBeUsed = 0;
    }
     else if (amp == "") {
        alert('Please fill "Amount Paid" Field');
    }else {
    myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID, coinsDiscount, coinsUsed,name];

    var array = JSON.stringify(myRow2);
   
   

    var xhttp = new XMLHttpRequest();
          

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Invoice Number " + this.responseText + " is generated here");
                //window.open("./testpdf/as");

            }
        };

        // xhttp.open("GET", "./addSalesForSS/" + array, true);
        // // var MenuID=$('#Menus').find(":selected").val();
        // xhttp.send();
        xhttp.open("POST", "./addSalesForSS/", true);
        xhttp.setRequestHeader('Content-Type', 'application/json');
    
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
        
        xhttp.send(array);
    

    }
}

        function insertInSalesOld() {
            var myTrows = [];
            var table = document.getElementById("ProductSaleTable");
            var myRow2 = [];
            $('#ProductSaleTable tr').each(function (row, tr) {
                myTrows[row] = [
                    $(tr).find('td:eq(0)').text(), //productID
                    $(tr).find('td:eq(2)').text(), //salePrice
                    $(tr).find('td:eq(3) input[type="text"]').val(), //qty
                    $(tr).find('td:eq(4) input[type="text"]').val(), //discount
                    $(tr).find('td:eq(5)').text() //totamount
                ];
            });
            myTrows.shift();
            //var invoiceNumber=getInvoiceID();
            var tot = document.getElementById("Total").value;
            
            var discount = document.getElementById('DiscountOverall').value;
            if (discount == "") {

                discount = 0;
                document.getElementById('DiscountOverall').value = 0;

            }
            
            var CoinsToBeUsed = document.getElementById('CoinsToBeUsed').value;
            var name = $('#CustomerName').find(":selected").text();
            var gross = document.getElementById('grossTotal').value;
            var tax = document.getElementById('tax').value;
            var netTotal = document.getElementById('NetTotal').value;
            var amp = document.getElementById('AmountPaid').value;
            var rmb = document.getElementById("RemainingBalance").value;
            var CID = document.getElementById("CID").value;
            var CLB = document.getElementById("LastBalance").value;
            var CCB = document.getElementById("CurrentBalance").value;
            var coinsDiscount = document.getElementById("coinsDiscounts").value;
            var coinsUsed = document.getElementById("CoinsToBeUsed").value;
            var AID = 1; //$('#accounts').find(":selected").val();
           
            if (tax == "") {
                document.getElementById('tax').value = 0;
            }
            
            if (AID == "") {
                alert("Payment Method not selected");
            }else if (name == " ") {
                alert("Customer not selected");
            }else if (myTrows == "") {
                alert("Please Select a Product");
            }else if (coinsUsed == "" || coinsUsed == undefined || coinsUsed == null) {
                coinsUsed = 0;
            }else if (coinsDiscount == ""|| coinsDiscount == undefined || coinsDiscount == null) {
                coinsDiscount = 0;
            }else if (CoinsToBeUsed == ""|| CoinsToBeUsed == undefined || CoinsToBeUsed == null) {
                CoinsToBeUsed = 0;
            }
             else if (amp == "") {
                alert('Please fill "Amount Paid" Field');
            }else {
            myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID, coinsDiscount, coinsUsed,name];

            var array = JSON.stringify(myRow2);
           
           

            var xhttp = new XMLHttpRequest();
                  

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Invoice Number " + this.responseText + " is generated here");
                        //window.open("./testpdf/as");

                    }
                };

                xhttp.open("GET", "./addSalesForSS/" + array, true);
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.send();
            }
        }

        function print(){
            window.open("./testpdf/as");
        }

        function UpdateSaleInvoice() {

            var myTrows = [];
            var table = document.getElementById("ProductSaleTable");
            var myRow2 = [];

            
            $('#ProductSaleTable tr').each(function (row, tr) {

                myTrows[row] = [

                    $(tr).find('td:eq(0)').text(), //productID
                    $(tr).find('td:eq(2)').text(), //salePrice
                    $(tr).find('td:eq(3) input[type="text"]').val(), //qty
                    $(tr).find('td:eq(4) input[type="text"]').val(), //discount
                    $(tr).find('td:eq(5)').text() //totamount


                ];


            });
            myTrows.shift();

            //var invoiceNumber=getInvoiceID();
            var tot = document.getElementById("Total").value;
            var customerName = $('#CustomerName').find(":selected").text();
            var contact = document.getElementById('CNO').value;
            var discount = document.getElementById('DiscountOverall').value;
            if (discount == "") {

                discount = 0;
                document.getElementById('DiscountOverall').value = 0;

            }
            var invoiceID = document.getElementById('InvoiceID').value;
            var gross = document.getElementById('grossTotal').value;
            var tax = document.getElementById('tax').value;
            var netTotal = document.getElementById('NetTotal').value;
            var amp = document.getElementById('AmountPaid').value;
            var rmb = document.getElementById("RemainingBalance").value;
            var CID = document.getElementById("CID").value;
            var CLB = document.getElementById("LastBalance").value;
            var CCB = document.getElementById("CurrentBalance").value;
            var AID = 1; //$('#accounts').find(":selected").val();
            var coinsUsed = document.getElementById("CoinsToBeUsed").value;
            var coinsDiscounts = document.getElementById("coinsDiscounts").value;

            if (tax == "") {
                document.getElementById('tax').value = 0;
            }

            if (AID == "") {
                alert("Payment Method not selected");
            }else if (name == " ") {
                alert("Customer not selected");
            }else if (myTrows == "") {
                alert("Please Select a Product");
            }else if (coinsUsed == "" || coinsUsed == undefined || coinsUsed == null) {
                coinsUsed = 0;
            }else if (coinsDiscount == " "|| coinsDiscount == undefined || coinsDiscount == null) {
                coinsDiscount = 0;
            } 
             else if (amp == "") {
                alert('Please fill "Amount Paid" Field');
            }else {
            myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID, customerName,
                contact, coinsUsed, coinsDiscounts
            ];

            var array = JSON.stringify(myRow2);
            var xhttp = new XMLHttpRequest();


                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Invoice =" + this.responseText + " is generated");
                        

                    }
                };

                xhttp.open("GET", "./updateInvoice/" + array + "/" + invoiceID, true);
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.send();
            }
        }

     function addCustomer() {

        var customerName = document.getElementById("addCustomerName").value;
      
        var address = document.getElementById("address").value;

        var contact = document.getElementById("addContact").value;
      
        var rank = document.getElementById("rank").value;
        
        var email = document.getElementById("email").value;
        
        var refID = document.getElementById("refID").value;
    
        // var cnic = document.getElementById("addCNIC").value;
        

        var newCustomer = {'customerName':customerName, 'address':address, 'contact':contact,   'refID':refID, 'rank':rank, 'email':email};

        if(customerName==""||address==""||contact==""  ){
            alert("Fill in all fields");
        }else{

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                loadAllCustomers();
            }
        };
        var EC = JSON.stringify(newCustomer);
        
        // xhttp.open("GET", "./addCustomer/" + EC, true);
        // xhttp.send();
        xhttp.open("POST", "./addCustomer/", true);
    xhttp.setRequestHeader('Content-Type', 'application/json');

    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    
    xhttp.send(EC);
}
}

     function getCategories() {
        document.getElementById("updateBtn").disabled = true; 
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                var table='';
                var a = JSON.parse(data);
                //alert(a[0].ProductName);

                $.each(a, function (i, item) {
                    table=table+'<tr style="text-align: center"><button style="border:1px solid red;" class="catBtn btn-pill" onclick="showMenu(' + a[i].PCID + ')"><span >'+a[i].CategoryName+'</span></button></tr>';
                    });
                document.getElementById("categories").innerHTML = table;
            }
        };

        xhttp.open("GET", "./getCategories/", true);
        xhttp.send();
        calc();
        loadAllCustomers();
        loadAccounts();
        getInvoiceID();
        getAllInvoices();
     }

     
     function showMenu(data){
      
        PCID=data;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                var table='';
                var a = JSON.parse(data);

                $.each(a, function (i, item) {

                    PID=a[i].ProductID;
                    pName=a[i].ProductName;
                    salePrice=a[i].PerUnitSalePrice;

                    table=table+'<tr ><button class="productBtn btn-shine" onclick="addProduct('+PID+', \''+ pName + '\', '+salePrice+')"><span>'+a[i].ProductName+'<br>'+a[i].PerUnitSalePrice+'&#163</span></button>&nbsp</tr>';
                    });
                document.getElementById("products").innerHTML = table;
            }
        };
        xhttp.open("GET", "./getMenu/"+PCID, true);
        xhttp.send();
     }

     function addProduct(PID, pName, salePrice){
        
        var CompanyName = "kk"
        var qty = 1;
        var table = document.getElementById("ProductSaleTable");

        if (IsItemExistInDataTable(PID)) {


        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        


        cell1.innerHTML = PID;
        cell2.innerHTML = pName;
        cell3.innerHTML = salePrice;
        cell4.innerHTML =
            '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
        cell5.innerHTML =
            '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=0.0>';
        var tot = salePrice * 1;
        cell6.innerHTML = tot;
        calc();

        cell7.innerHTML =
            "<button id='DelButton'class=\"btn btn-danger\"  value='x' text='x' onclick='RemoveThisRow(this)'></button>";

        } else {
            alert("Quantity Increased");
        }


        }

        function getCoinsConversionRateOfThisCustomer(id){
            return 100;
        }

    function UseCoins(){
        AC= document.getElementById("CoinsAvailable").innerText;
        CTU=document.getElementById("CoinsToBeUsed").value;
        if(Number(CTU)<=Number(AC)){
            var conversionRate=getCoinsConversionRateOfThisCustomer(1);
            actusalDiscount=parseFloat(CTU)/parseFloat(conversionRate);  
            document.getElementById("coinsDiscounts").value=actusalDiscount;

        }else{
            alert("You have "+AC+" Coins only");
            document.getElementById("CoinsToBeUsed").value=0;
            UseCoins()
        }

            calc();
        }

        function showdata() {
        var ID = $('#CustomerName').find(":selected").val();  
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data=this.responseText;
                a=JSON.parse(data);
                document.getElementById("CoinsAvailable").innerHTML=a[0].CoinBalance;
            }
        };
        xhttp.open("GET", "./logedInCustomerData/" + ID, true);
        xhttp.send();
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
            xhttp.open("GET", "./logout/"+lg, true);
            xhttp.send();
            }

    
        var input = document.getElementById("myInput");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                getInvoiceCustomer();
            }
                });

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
        xhttp.open("GET", "./logout/"+lg, true);
        xhttp.send();
        }

</script>

<!-- <script>
        $("#btnPrint").live("click", function () {
            data = document.getElementById("ProductSaleTable");
            
            
            var d = new Date();
            var datestring = d.getDate()  + "-" + (d.getMonth()+1) + "-" + d.getFullYear() + " " + d.getHours() + ":" + d.getMinutes();
            var invoiceNumber = document.getElementById("InvoiceID").value;
            var NetTotal = document.getElementById("NetTotal").value;
            var Total = document.getElementById("Total").value;
            var tax = document.getElementById("tax").value;
            var  coinsDiscounts = document.getElementById("coinsDiscounts").value;
            var  DiscountOverall = document.getElementById("DiscountOverall").value;
            var totalDiscount = parseInt(coinsDiscounts) + parseInt(DiscountOverall);

            
            var printWin = window.open('','','left=1,top=1,width=2,height=2,toolbar=0,scrollbars=0,status  =0');
            table='<table><tr><td><h3>Item</h3></td><td><h3>Qty</h3></td><td><h3>Price</h3></td></tr>';

            for(i=1; i<data.rows.length; i++){
                productName = data.rows[i].cells[1].innerHTML;
                qty = data.rows[i].cells[3].children[0].value;
                price = data.rows[i].cells[5].innerHTML;
                table=table+'<tr><td>'+productName+' </td><td>'+qty+' </td><td>'+price+'</td></tr>'
            };
            
            printWin.document.write(
                '<html><head>'
                +'<title>Print</title></head><body>'
                +'<div style="padding: 3mm; width: 80mm;">'
                +' <div></div><div>'
                +' <h2 margin-left=\"15px;\">KhyberPass</h2><br></div>  '
                +'<div> <div"><h3>Contact Info</h3>'
                +'<p>Address : 48 Gregory Blvd, <br>Nottingham NG7 5JD,  United Kingdom</br>Phone   : +44 115 924 4044</br></p>'
                +'</div></div><div><div>'
                +table
                +'<br><tr><td></td><td> Total </td><td>  '+Total+' </td></tr>'
                +'<tr><td></td><td> Tax </td><td> '+tax+' </td></tr>'
                +'<tr><td></td><td> Total Discount </td><td> '+totalDiscount+' </td></tr>'
                +'<tr><td></td><td><h3> Net Total</h3> </td><td><h3> '+NetTotal+'</h3> </td></tr></table></div>'
                +'<div><p><strong>Thank you for your business!</strong>  </p></div></div> </div> '
         
                +'</table></body></html>');
             
                printWin.print();
                 
        });
    </script> -->
    
</body>

</html>
 