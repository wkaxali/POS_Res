<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

   <title>Edit Menu</title>


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

        }#stocktable_length label {
            width: auto !important;
        }

        
        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        @media print {
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
        }

        .controlTables {
            overflow: auto;
        }

        @media only screen and (max-width: 768px) {


            .inner-block {
                padding: .5em 1em 2em 1em;
            }

            .customClassBorder {
                border: none !important;
            }

            .dataTables_wrapper .dataTables_filter {
                float: right !important;
                text-align: right !important;
            }
        }

    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body onload="searchRawMatirial()">
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <h2>Admin</h2>
                @include('adminNavbar') 
                </nav>
<div class="container">


    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3" >Edit Menu</h3>
                </div>
            </div>

        </div>
    </header>
    <section class="mt-5">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-7 ">
                    <div class="stock-table"
                        style="height: 624px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr>

                                        <th>Id</th>
                                        <th>Product Name</th>
                                        
                                        <th>QYT</th>
                                        <th>Description</th>
                                        <th>Cost Price</th>
                                        <th> Sale Price </th>
                                        <th>  In Stock</th>
                                        
                                        <!-- <th>Color</th> -->
                                       
                                        <!-- <th>Status</th> -->
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-5 stockLabels" style="height: 300px;">
                <div style="display: flex;">
                    <div>
                        <label for="id">Product ID
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="productID" readonly></label>
                        <label for="id">Product Name
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="productName"></label>
                        
                            <label for="id">Category
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="category"></label>
                        <label for="id">Description
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="description"></label>
                    </div>
                    <div >
                        <label for="id">Cost Price
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="costprice"></label>
                        <label for="id">Sale Price
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="saleprice"></label>
                            <label for="id"> In Stock
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="instock"></label>
                        <!-- <label for="id">Color</label>
                        <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                            name="id" id="color"> -->
                    
                        
                        <!-- <label for="id">Status</label> -->
                        <input type="text" class="form-control" style="display: none; width: 200px !important;"
                            name="id" id="status">
                    
                            <div class="st-button  " style="margin-top:23px;">
                                <button class="btn btn-success" onclick="SetStockIdeal()">Update </button>
                            </div>
                            
                            </div>
                                      
                        </div>    
                  
      
<<<<<<< HEAD
              <div class="w3-card" style="width:95%;height:90%; margin-top: 70px; ">
      <img src="img_5terre.jpg" style="width:100%; height:100%;">
      <div class="w3-container">
        <h5>Product Name</h5>
      </div>
=======
    
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   <div id="imageDiv"class="w3-card" style="width:95%;height:90%; margin-top: 70px; ">
    <img src="/images/{{ Session::get('path') }}" id="output" alt="" style="width:100%;height:100%;">
    <div class="container">

   @endif
   <form method="post" action="{{url('/replaceImage')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div id="imageDiv"class="w3-card" style="width:95%;height:90%; margin-top: 70px; ">
    <img src="" id="output" alt="" style="width:100%;height:100%;">
    <div class="container">
    <div class="form-group">
       <input type="file" onchange="loadFile(event)" name="select_file" />
       <input type="submit" name="upload" class="btn btn-primary" value="Upload">
    </div>
   </form>
   <br />
   
   
  </div>
>>>>>>> d80c037415e262ded0b8b5dccc2a846ab2770815
    </div>
  </div>
            
                
                    
                    
                
      
            
        </div>
    </section>
</div>


  <script>
  var loadFile = function(event) {
          var image = document.getElementById("output");
          image.src = URL.createObjectURL(event.target.files[0]);
  }
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#stocktable').DataTable();
        });
    </script>
    <!--end::Global Theme Bundle-->

<script>

function searchRawMatirial() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var data =   this.responseText;
       //alert(data);
       var table;
       var a=JSON.parse(data);
       
       table = $('#stocktable').DataTable(); 
        
        $.each(a, function (i, item) {

            table.row.add([a[i].ProductSerial, a[i].ProductName, a[i].Category ,a[i].description ,a[i].PerUnitPurchasePrice,a[i].PerUnitSalePrice ,a[i].StockIn 
            ]);
            });   
         table.draw(); 
         
    }
  };
  
  xhttp.open("GET", "./viewAllStock/", true);
  xhttp.send();
}
$("#stocktable").on('click','tr',function(){

     document.getElementById("productID").value=this.cells[0].innerText; 
     document.getElementById("productName").value=this.cells[1].innerText;
     document.getElementById("category").value=this.cells[2].innerText;
     document.getElementById("description").value=this.cells[3].innerText;
     document.getElementById("costprice").value=this.cells[4].innerText;
     document.getElementById("saleprice").value=this.cells[5].innerText;
     document.getElementById("instock").value=this.cells[6].innerText;
    id=this.cells[0].innerText; 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var data = this.responseText;
        

        document.getElementById("output").src=data;
        }
    };
  
  xhttp.open("GET", "./getProductImage/"+id, true);
  xhttp.send();
}
);

function SetStockIdeal() {
    
    var PID = document.getElementById("productID").value;
    //alert("updated  "+PID);
    var productName = document.getElementById("productName").value;
    //alert("updated  "+productName);
    var category = document.getElementById("category").value;
    //alert("updated  "+company);
    var description = document.getElementById("description").value;
    
    var costprice = document.getElementById("costprice").value;

    var saleprice = document.getElementById("saleprice").value;
   
    var instock = document.getElementById("instock").value;
    
    var UpdateStock = {'PID':PID, 'productName':productName, 'category':category, 'description':description,'costprice':costprice,'saleprice':saleprice,'instock':instock};
   

    var UC = JSON.stringify(UpdateStock);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("item  " + this.responseText + " is Updated");
                    location.reload(); 

                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            // xhttp.open("GET", "./SetStockIdeal/" + UC, true);
            // xhttp.send();
            xhttp.open("POST", "./SetStockIdeal/", true);
            xhttp.setRequestHeader('Content-Type', 'application/json');

            var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
            
            xhttp.send(UC);
            
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
<!-- <script>
        $(document).ready(function () {
            $('#stocktable').DataTable({
                responsive: {
                    details: {
                        type: 'column',
                        target: 'tr'
                    }
                },
                columnDefs: [{
                    className: 'control',
                    orderable: false,
                    targets: 0
                }],
                order: [1, 'asc']
            });
        });

    </script> -->
 </body>

</html>