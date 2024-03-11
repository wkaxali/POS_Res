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

  <title id="justTitle"></title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- font awesome style -->
  <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page" onload="getCategories();cookieToCartWriter()">

  <div class="hero_area">
    <div class="bg-box">
      <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span id ="headerTitle"></span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul  class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/newmenu">Menu </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ContactUs&me">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/wa">Refer a Friend </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#historyModal">History <span class="sr-only">(current)</span> </a>
              </li> --}}
            </ul>

            <div class="user_option">
              
              {{-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> --}}
              <div class="dropdown">
                <a href="#" class="user_link">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <div class="dropdown-content">
                  <a id="logingButton" href="#"></a>
                  <a href="#"onclick = "userlogout()">Logout</a>
                </div>
              </div>
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
                                  <th class="invisible-div">Product ID</th>
                                  <th>Product Name</th>
                                  <!-- <th >Company</th> -->
                                  <th>Sale Price</th>
                                  <th>Quantity</th>
                                  <th class="invisible-div" >Discount</th>
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
                      <!-- Vehicle dropdown
                      <select class="form-control mb-3" id="vehicals">
                          <option>Select Vehicle</option>
                          Add vehicle options here
                      </select> -->

                      <!-- Customer dropdown -->
                
                      
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
                        <div class="invisible-div">Contact Number: <input type="text"  id="CNO" readonly></div>
                        <div class="invisible-div">Category: <input type="text"  id="CustomerCategory" readonly></div>
                        
                    </div>
                    
                    <!-- Cart summary on the right -->
                    {{-- <div class="cart-summary">
                        <!-- Total, discount, tax, net total, amount paid, remaining balance -->
                        <div style = "display:flex;" >Total: <span ><input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text"  id="Total" readonly></span></div>
                        <div style = "display:inline-flex;">Enter Coins: <input style="display: inline;  height: 25px; width:100px; float:right" class = "form-control" type="text"  id="CoinsToBeUsed" onchange="UseCoins()"></div>
                        <div style = "display:flex;">Coins Discount: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text"  id="coinsDiscounts" onchange="calc()" readonly></div>
                          <div style = "display:flex;">Discount: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text" onchange="calc()" id="DiscountOverall" ></div>
                          <div style = "display:flex;">Tax%: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text" onchange="calc()" id="tax"></div>
                          <div style = "display:flex;">Net Total: <input style="display: inline-block;  height: 25px; width:100px; float:right" class = "form-control" type="text" id="NetTotal" readonly></div>
                        </div> --}}
                        <div class="invisible-div">Gross Total: <span ><input type="text" id="grossTotal" readonly></span></div>
                        <div class="invisible-div">Tax Amount: <span ><input type="text" id="taxAmount" readonly></span></div>
                        <div class="invisible-div">Amount Paid: <span ><input type="text" id="AmountPaid" oninput="calcForBalance()" readonly></span></div>
                        <div class="invisible-div">Remaining Balance: <span ><input type="text" id="RemainingBalance" readonly></span></div>
                        <div class="container">
                            <div class="flex-container-foraddbtn">
                                {{-- <select class="myselect" style="width: 60%" id="CustomerName"
                                onchange="getCurrentCustomerInfo()">
                                </select> --}}
                                <div id="profileLabel">Profile: <label id="CustomerName"></label></div>
                            
                                  <div id="loginButton"><button class="btn btn-success btn-lg" onclick="location.href='/up'">Please Login!</button></div>
                      </div>
                            <h5 id="CoinsAvailable">COINS: 0</h5>
                        <div class="row">
                            <div class="col-sm ">Total:</div>
                            <div class="col-sm-6"><input class = "form-control" type="text" id="Total" readonly></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">Enter Coins:</div>
                            <div class="col-sm"><input class = "form-control" type="text" id="CoinsToBeUsed" onchange="UseCoins()"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm">Coins Disc:</div>
                            <div class="col-sm-6"><input class = "form-control" type="text"  id="coinsDiscounts" onchange="calc()" readonly></div>
                        </div>
                        <div class="row invisible-div">
                            <div class="col-sm">Discount:</div>
                            <div class="col-sm-6"><input class = "form-control" type="text" id="DiscountOverall" onchange="calc()" ></div>
                        </div>
                        <div class="row invisible-div">
                            <div class="col-sm">Tax%:</div>
                            <div class="col-sm-6"><input class = "form-control" type="text" id="tax" onchange="calc()" ></div>
                        </div>
                        <div class="row">
                            <div class="col-sm">Net Total:</div>
                            <div class="col-sm-6"><input class = "form-control" type="text" id="NetTotal" readonly></div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <!-- Buttons for actions -->
              <button type="button" class="btn btn-success" onclick="stripeChcekout()" id = "saveBtn">Checkout</button>
              {{-- <button type="button" class="btn btn-success" onclick="UpdateSaleInvoice()"  id = "updateBtn">Update Invoice</button> --}}
              {{-- <button type="button" class="btn btn-success" onclick="print()">Print</button> --}}

              
            </div>
      </div>
  </div>
</div>


  <!-- jQery -->
  <script src="{{asset('assets/js/jquery-3.4.1.minForNewSales.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('assets/js/bootstrapForNewSales.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

  <script>
      $(document).ready(function () {
          $('#myTables').DataTable();
      });
      $(document).ready(function(){
        $('.myselect').select2();
      })
      
  </script>
  <script type="text/javascript">
    var customerID = '{{ Session::get("UserID") }}';
</script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
  
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  
  <!-- custom js -->
  <script src="https://js.stripe.com/v3/"></script>
  <script type="text/javascript">
    var stripePublicKey = "{{ $stripeKey }}";
    const stripe = Stripe(stripePublicKey);
    </script>
    <script>
       var sessionData = {!! json_encode($sessionID, JSON_HEX_TAG) !!};
    
    console.log(sessionData)
    </script>
    <script src="{{asset('assets/js/deliveryMenu.js')}}"></script>
</body>

</html>