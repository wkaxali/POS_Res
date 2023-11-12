<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">


    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Customers Sale History</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


        .ThirdColor {
            background-color: #32cd32;
            height: 30px;
            border-radius: 10px;
        }

        .FourthColor {
            background-color: Green;
            height: 30px;
            border-radius: 10px;
        }

        label {
            width: 100px;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

        .bootstrap-select {
            background: none;
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

        @media print {
            .left-content {
                width: 100% !important;
            }

            .sidebar-menu {
                display: none;
            }

        }
        th { font-size: 13px;   }
        td { font-size: 13px; }

        .inner-block {
            padding: 1em 1em 2em 1em;
        }
        .bootstrap-select > select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {
    display: block !important;
}
    </style>
</head>

<body onload="getCustomersHistory()">
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <h2>Admin</h2>
@include('adminNavbar') 
</nav>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">Customers Sale History</h1><br><br><br>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row my-2">
                            <div class="col-md-4">
                                <label style="width:117px;" for="">Select Customer</label><br>
                                <select class="selectpicker form-control" data-live-search="true" id="Customers">
                                    <option value=" "> </option>
                                   

                                </select>
                            </div>
 
                            <div class="col-md-4  ">
                                
                                <button 
                                    class="btn  btn-info" data-live-search="true"  style="margin-top:32px;"
                                    onclick="filterCustomerData()">
                                    Search
                                </button>
                                <br><br>
                        </div>
                    </div>
                                 
                          
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ThirdColor mt-1 mb-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <section >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="transactionTable">
                                     
                                       <div id ="mydata" class="table-responsive">
                                       <table  style="width: 100%; text-align: center;" class="table table-striped display nowrap" id="myTable">
                                            <thead>
                                                <tr>
    
                                                    <th>Invoice Number</th> 
                                                    <th>Customer Name</th>
                                                    <th>Contect</th> 
                                                    <th>Product Name</th>
                                                    <th>Amount</th>
                                                    <th>Date Stamp</th>
                                                    <th>Discount</th>
                                                    <th>Quantity</th> 
                                             
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>
                                       </div>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="MainSection">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ThirdColor mt-1 mb-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-right offset-md-8">
                                <button onclick="printCustomerHistory()" class="btn btn-info">Print</button> -->
                                <!-- <button class="btn btn-danger">Close</button>
                            </div>
                        </div>
                    </div> -->
                    
           
            </div>






            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
            </script>
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
            </script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js'></script>


<script>
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
        
        function loadAllCustomers() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("Customers").innerHTML = 
                    this.responseText;
                $('#Customers').selectpicker('refresh');

            }
        };

        xhttp.open("GET", "./getCustomerName", true);
        xhttp.send();
    };
               
    function getCustomersHistory() {
        loadAllCustomers();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                var data = this.responseText;
              
               var table;
                var a = JSON.parse(data);
            
              
                table = $('#myTable').DataTable();

                $.each(a, function (i, item) {

                    table.row.add([  
                        a[i].InvoiceNumber ,a[i].CustomerName, a[i].Contect, a[i].ProductName, a[i].TotalSaleAmount,a[i].DateStamp, a[i].Discount, a[i].Quantity,
                          a[i].Status 
                    ]);
                    
                    });
                table.draw();
                

            }
        };
        //alert("ljd");
        xhttp.open("GET", "./getCustomersHistory/", true);

        xhttp.send();
    }

    function filterCustomerData() {

        var customerID = $('#Customers').find(":selected").val();
        

        if(customerID==" "){
            customerID="All";
      } 
    //   alert(customerID);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                var data = this.responseText;
                // alert(data);
                var table;
                var a = JSON.parse(data);
                
               
                table = $('#myTable').DataTable();
                table.clear();
                $.each(a, function (i, item) {

                    table.row.add([  
                        a[i].InvoiceNumber ,a[i].CustomerName, a[i].Contect, a[i].ProductName, a[i].TotalSaleAmount,a[i].DateStamp, a[i].Discount, a[i].Quantity,
                          a[i].Status 
                    ]);
                });
                table.draw();
                

            }
        };
       
         
       

        xhttp.open("GET", "./filterCustomerData/"+customerID, true);
        xhttp.send();
    }

                
</script>
<script>
    function printCustomerHistory (){
                   
            var customersID = $('#Customers').find(":selected").val();
                
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printCustomerHistory/'+customersID );
                  
                }
            }
          
                     if(customersID == " "){
                        customersID = "All";  
                    }
                       
            // alert("hello");
            xhttp.open("GET", "./printCustomerHistory/"+customersID, true);
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
      
    </script>
</body>

</html>
