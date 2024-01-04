<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="">
  <link rel="stylesheet" href="{{asset('assets/css/cartstyles.css')}}">

  <title></title>

  <!-- bootstrap core css -->
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" /> --}}

  <!--owl slider stylesheet -->
  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> --}}
  <!-- nice select  -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" /> --}}
  <!-- font awesome style -->
  <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
 
  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 


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

<body id="kt_bodys" class="sub_page" onload="getCategories(); getCompanyName()">

  <div class="hero_area">
    <div class="bg-box">
      <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section ">
      <div class="container center">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span id ="headerTitle">
              
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div style = "padding-left:34%; padding-right:40%;">  
          <ul  class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#historyModal">History <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
</div>
            <div class="user_option">
              
              <a class="cart_link" data-toggle="modal" data-target="#cartModal">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
                <span id="cart-item-count">0</span>
              </a>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      


       
      </div>

  <ul class="filters_menu" id = "menuCategory">
    <!-- <li class="active" data-filter="*" >All</li>
    <li data-filter=".burger">Burger</li>
    <li data-filter=".pizza">Pizza</li>
    <li data-filter=".pasta">Pasta</li>
    <li data-filter=".fries">Fries</li> -->
  </ul>

      

      <div class="filters-content">
        <div class="row grid" id="menuItems">
          
      </div>
    </div>
  </section>

  <!-- end food section -->
<div id="footerSection"></div>
<!--History Modal -->
<div class="modal fade" id="historyModal">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Sales History</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <!-- Left Side: Cart Items in a Table -->
                  <div class="col-md-11">
                    <div style="max-height: 400px; overflow-y: auto;">

                      <table class="table table-bordered" id="saleHistoryTable">
                          <thead>
                              <tr>
                                  <th>Invoice No</th>
                                  <th>Party Name</th>
                                  <th>Account Name</th>
                                  <th>Amount Paid</th>
                                  <th>Balance</th>
                                  <th>Date Stamp</th>
                              </tr>
                          </thead>
                          <tbody>
       
                              <!-- Add more items here -->
                          </tbody>
                      </table>
                  </div>
                  </div>

      
                  
              </div>
          </div>
          <div class="modal-footer">
              <!-- Buttons for actions -->
              
            </div>
      </div>
  </div>
</div>


<!-- The Cart Modal -->
<div class="modal fade" id="cartModal">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Shopping Cart</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <!-- Left Side: Cart Items in a Table -->
                  <div class="col-md-9">
                    <div style="max-height: 400px; overflow-y: auto;">

                      <table class="table" id="ProductSaleTable">
                          <thead>
                              <tr>
                                  <th>Product ID</th>
                                  <th>Product Name</th>
                                  <!-- <th >Company</th> -->
                                  <th>Sale Price</th>
                                  <th>Quantity</th>
                                  <th>Discount</th>
                                  <th>Total</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
       
                              <!-- Add more items here -->
                          </tbody>
                      </table>
                  </div>
                  </div>

                  <!-- Right Side: Drop-downs and Billing Details -->
                  <div class="col-md-3">
                      {{-- Vehicle dropdown --}}
                      {{-- <select class="form-select" aria-label="Default select example" id="vehicals">
                          <option>Select Vehicle</option>
                          Add vehicle options here
                      </select> --}}

                      <!-- Customer dropdown -->
                      
     
                  <div >
                   
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="CustomerName"
                    onchange="getCurrentCustomerInfo()">
                    <option value=" ">Select Customer</option>
                    </select>
                  </div>
              
         

                      <button class="btn btn-success" data-toggle="modal"
data-target="#staticBackdrop">Add</button>

<div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body">
<div class="registration-form" >
<h2>Add New Customer</h2>
<div class="form-group-1">
<form>
<input type="text" style="width:232px;" class="form-control item" name="name" id="addCustomerName"
placeholder="Customer Name" required />
<input type="text" style="width:232px;" class="form-control item" name="title" id="address"
placeholder="Address" required />

<input type="number" style="width:232px;" class="form-control item" name="tel" id="addContact"
placeholder="Contact" required />

<input type="email" style="width:232px;" class="form-control item" name="tel" id="email"
placeholder="Email ID" required />
<!-- 
<input type="number" style="width:232px;" class="form-control item" name="title" id="addCNIC" placeholder="ID Card"
required /> -->
<input type="number" style="width:232px;" class="form-control item" name="phone_number" id="refID"
placeholder="Refferal ID" required />
<input type="text" style="width:232px;" class="form-control item" name="phone_number" id="rank"
placeholder="Rank" required />
</form>
</div>

<div class="form-submit">
<button class="btn btn-success" onclick="addCustomer()" class="btn create-account" name="submit" id="submit"
class="submit" value="">Add</button>
</div>
</div>

</div>
{{-- <div class="modal-footer">
<button type="button" class="btn btn-success"
data-dismiss="modal">Close</button>
</div> --}}
</div>

</div>
</div>






                      <div>
                        <div class="invisible-div">Invoice Number: <span ><input  type="text"  id="InvoiceID" readonly></span></div>
                        <div class="invisible-div">Customer Id: <span><input  type="text"  id="CID" readonly></span></div>
                        <div class="invisible-div">Last Balance: <span><input  type="text"  id="LastBalance" readonly></span></div>
                        <div class="invisible-div">Current Balance: <span><input  type="text"  id="CurrentBalance" readonly></span></div>
                        <h4 style = "display:flex;" >COINS:<h4 id="CoinsAvailable">0</h4></h4>
                        <div class="invisible-div">Contact Number: <input type="text"  id="CNO" readonly></div>
                        <div class="invisible-div">Category: <input type="text"  id="CustomerCategory" readonly></div>
                        
                    </div>
                    
                    <!-- Cart summary on the right -->
                    <div class="cart-summary">
                        <!-- Total, discount, tax, net total, amount paid, remaining balance -->
                        <div style = "display:flex;" >Total: <span ><input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text"  id="Total" readonly></span></div>
                        <div style = "display:inline-flex;">Enter Coins: <input style="display: inline;  height: 25px; width:100px; float:right" class = "form-control" type="text"  id="CoinsToBeUsed" onchange="UseCoins()"></div>
                        <div style = "display:flex;">Coins Discount: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text"  id="coinsDiscounts" onchange="calc()" readonly></div>
                          <div style = "display:flex;">Discount: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text" onchange="calc()" id="DiscountOverall" ></div>
                          <div class="invisible-div">Gross Total: <span ><input type="text" id="grossTotal" readonly></span></div>
                          <div style = "display:flex;">Tax%: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text" onchange="calc()" id="tax"></div>
                          <div class="invisible-div">Tax Amount: <span ><input type="text" id="taxAmount" readonly></span></div>
                          <div style = "display:flex;">Net Total: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text" id="NetTotal" readonly></div>
                          <div class="invisible-div">Amount Paid: <span ><input type="text" id="AmountPaid" oninput="calcForBalance()" readonly></span></div>
                          <div class="invisible-div">Remaining Balance: <span ><input type="text" id="RemainingBalance" readonly></span></div>
                          <!-- Payment method dropdown -->
                          <!-- <select class="form-control mb-3" id="accounts">
                              <option>Select Payment Method</option>
                               Add payment methods here -->
                          <!-- </select> --> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <!-- Buttons for actions -->
              <button type="button" class="btn btn-success" onclick="insertInSales()" id = "saveBtn">Checkout</button>
              <button type="button" class="btn btn-success" onclick="UpdateSaleInvoice()"  id = "updateBtn">Update Invoice</button>
              <button type="button" class="btn btn-success" onclick="print()">Print</button>

              
            </div>
      </div>
  </div>
</div>


  <!-- jQery -->
  {{-- <script src="{{asset('assets/js/jquery-3.4.1.minForNewSales.js')}}"></script> --}}
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="{{asset('assets/js/bootstrapForNewSales.js')}}"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

  {{-- <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> --}}
  <script src="{{asset('assets/js/NewSales.js')}}"></script>

  {{-- <script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> --}}
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  {{-- <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script> --}}
  <!-- custom js -->
  <script src="{{asset('assets/js/customForNewSales.js')}}"></script>
  <!-- Google Map -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script> --}}
  <!-- End Google Map -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
 
  
    
    


</body>

</html>