<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Customer</title>


    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

        .stockLabels label {
            width: 235px;
        }

        .stockLabels {
            padding: 20px 10px;
            border-radius: 10px;
            border: 1px solid rgb(202, 202, 202);
        }

        .stock-table {
            border-radius: 10px;
            padding: 10px;
        }

        .containerMy {
            max-width: 1400px;
            margin: 0 auto;

        }

    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <h2>Admin</h2>
@include('adminNavbar') 
</nav>
<body onload="getCustomers()">
<div class="container">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Edit Customer</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>

                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Contact</th>
                                <th>CNIC</th>
                                <th>Balance</th>
                                <th>Rank</th>
                                <th>Comments</th>

                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <div class="input-field">
                        <label for="status">CustomerID</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="CID" readonly>
                    </div>
                    <div class="input-field">
                        <label for="status">CustomerName</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="customerName">
                    </div>

            

                    <div class="input-field">
                        <label for="status">Contact</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="Contact" required>
                    </div>

                    <div class="input-field">
                        <label for="status">CNIC</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="CNIC" required>
                    </div>

                    <div class="input-field">
                        <label for="status">Balance</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            value="" id="Balance" required>
                    </div>


                    <div class="input-field">
                        <label for="status">Rank</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="RID" required>
                    </div>


                    <div class="input-field">
                        <label for="status">Comments</label>
                        <input type="email" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="Comments" required>
                    </div>

            
<br>
                    <button class="btn btn-success" onclick="editCustomer()"> Update </button>


                </div>
            </div>
        </div>
    </section>
</div>









                    <!--end::Demo Panel-->

                    <!-- jQuery and JS bundle w/ Popper.js -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                        crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                        crossorigin="anonymous">
                    </script>
                    <script type="text/javascript" charset="utf8"
                        src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
                    </script>
                    <script>
                        $(document).ready(function () {
                            $('#stocktable').DataTable();
                        });

                    </script>
                    <!--end::Global Theme Bundle-->

                    <script>
                        function getCustomers() {
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    var data = this.responseText;
                                
                                    var table;
                                    var a = JSON.parse(data);

                                    table = $('#stocktable').DataTable();

                                    $.each(a, function (i, item) {

                                        table.row.add([a[i].CustomerID, a[i].CustomerName, a[i].Contect, a[i].CNIC,
                                            a[i].Balance, a[i].Rank, a[i].Comments
                                        ]);
                                    });
                                    table.draw();
                        
                                }
                            };

                            xhttp.open("GET", "./getCustomers", true);
                            xhttp.send();
                        }

                        $("#stocktable").on('click', 'tr', function () {
                            document.getElementById("CID").value = this.cells[0].innerText;
                            document.getElementById("customerName").value = this.cells[1].innerText;
                            document.getElementById("Contact").value = this.cells[2].innerText;
                            document.getElementById("CNIC").value = this.cells[3].innerText;
                            
                            document.getElementById("Balance").value = this.cells[4].innerText;
                            document.getElementById("RID").value = this.cells[5].innerText;
                            document.getElementById("Comments").value = this.cells[6].innerText;

                        });

                        function editCustomer() {
                            var CID = document.getElementById("CID").value;
                            var customerName = document.getElementById("customerName").value;
                            var contact = document.getElementById("Contact").value;
                            var CNIC = document.getElementById("CNIC").value;
                            
                            var Balance = document.getElementById("Balance").value;
                            var RID = document.getElementById("RID").value;
                            var Comments = document.getElementById("Comments").value;
                            if (CID == "" || customerName == "" || contact == "" || CNIC == "" || Balance == "" || Comments == "") {      
                                 alert("please fill all fields");
                            }else{
                            var updateCustomer = [CID, customerName, contact, CNIC, Balance, RID, Comments];
                            }

                            var UC = JSON.stringify(updateCustomer);
                            
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {

                                    alert("Customer " + this.responseText + " is Updated");
                                    location.reload(); 

                                }
                            };

                            // var MenuID=$('#Menus').find(":selected").val();
                            xhttp.open("GET", "./editCustomer/" + UC, true);
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
