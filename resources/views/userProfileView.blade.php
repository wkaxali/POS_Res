<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/userProfileStyles.css')}}">

</head>
<body onload="displayFooterSection(); getloggedinCustomerInfo()">

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
<main>

   

    <div class="container mt-4">
        <form>
            <p style="display: none" id="customerID">{{ Session::get('UserID') }}</p>
            <h1 class="mb-4">Account Management</h1>
                <div class="form-group">
                    <label for="customerName">User Name:</label>
                    <input type="text" class="form-control" id="customerName" name="customerName">
                </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input readonly type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="contact">Contact Details:</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>

            <div class="form-group">
                <label for="password">Change Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="address">Delivery Address:</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
        </form>
            <button class="orderTracking" onclick="editCustomer()">Update Info</button>

       <br><br><br>

            <h3>Order Tracking</h3><br>
           <a class="orderTracking" href="/success">Click to track current order</a>

        <br><br>
    </div>

</main>

    <footer id="footerSection"></footer>

<!-- Bootstrap JS and Popper.js are required for Bootstrap components -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    
    function editCustomer() {
                            var CID = document.getElementById("customerID").innerHTML;
                            var customerName = document.getElementById("customerName").value;
                            var contact = document.getElementById("contact").value;
                            var password = document.getElementById("password").value;                            
                            var address = document.getElementById("address").value;
                            if (customerName == "" || contact == "" || contact == "" || password == "" || address == "") {      
                                 alert("please fill all fields");
                            }else{
                            var updateCustomer = {'CID':CID, 'customerName':customerName, 'contact':contact, 'password':password, 'address':address};
                            }

                            var UC = JSON.stringify(updateCustomer);
                            
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {

                                    // alert("Customer " + this.responseText + " is Updated");
                                    location.reload(); 

                                }
                            };


                            xhttp.open("POST", "./updateCustomerDetails/", true);
                            xhttp.setRequestHeader('Content-Type', 'application/json');

                            var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
                            xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
                            
                            xhttp.send(UC);

                        }
    function getloggedinCustomerInfo() {
    
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                var a = JSON.parse(data);
                document.getElementById("customerName").value = a[0].CustomerName;
                document.getElementById("email").value = a[0].Email;
                document.getElementById("password").value = a[0].Password;
                document.getElementById("contact").value = a[0].Contect;
                document.getElementById("address").value = a[0].Address;
            } else {
            
            }
        };
        var CustomerID = $('#customerID').text();
        xhttp.open("GET", "./getCustomersInfo/" + CustomerID, true);
        xhttp.send();

    }
      </script>
</body>
</html>