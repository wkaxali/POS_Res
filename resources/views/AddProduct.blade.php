<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add Product</title>
   
    <style>
        * { box-sizing:border-box; }

        /* basic stylings ------------------------------------------ */
        body  { background:url(https://scotch.io/wp-content/uploads/2014/07/61.jpg); }
        .container 		{ 
        font-family:'Roboto';
        width:600px; 
        margin:30px auto 0; 
        display:block; 
        background:#FFF;
        padding:10px 50px 50px;
        }
        h2  { 
        text-align:center; 
        margin-bottom:50px; 
        /* background-color:#ece04f; */
        color:black;
        /* width:400px; */
        }
        
        .footer 	{ text-align:center; }
        .footer a  { color:#53B2C8; }

        /* form starting stylings ------------------------------- */
        .group 			  { 
        position:relative; 
        margin-bottom:10px; 
        font-size:20px;
        margin-left:10px; 
        }
        input 				{
        font-size:18px;
        padding:10px 10px 10px 5px;
        display:block;
        width:300px;
        border:none;
        border-bottom:1px solid #757575;
        }
        input:focus 		{ outline:none; }

        /* LABEL ======================================= */
        label 				 {
        color:#999; 
        font-size:18px;
        font-weight:normal;
        position:absolute;
        pointer-events:none;
        left:5px;
        top:10px;
        transition:0.2s ease all; 
        -moz-transition:0.2s ease all; 
        -webkit-transition:0.2s ease all;
        }

        /* active state */
        input:focus ~ label, input:valid ~ label 		{
        top:-7px;
        font-size:14px;
        color:#5264AE;
        }

        .container{
            margin-left:200px;
        }

        /* BOTTOM BARS ================================= */
        .bar 	{ position:relative; display:block; width:300px; }
        .bar:before, .bar:after 	{
        content:'';
        height:2px; 
        width:0;
        bottom:1px; 
        position:absolute;
        background:#5264AE; 
        transition:0.2s ease all; 
        -moz-transition:0.2s ease all; 
        -webkit-transition:0.2s ease all;
        }
        .bar:before {
        left:50%;
        }
        .bar:after {
        right:50%; 
        }

        /* active state */
        input:focus ~ .bar:before, input:focus ~ .bar:after {
        width:50%;
        }
        #button1{
            width:80px;
        }

        

        
            </style>
</head>

                <body onload="getAllCategories()">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">  <h2>Admin</h2>
                @include('adminNavbar') 
                </nav>
                <h2>Add Product</h2>
                    <div class="container" >
           
                               
                          
                
                <form>
                    
                    <div class="group" style ="margin-left:350px;" >      
                    <input type="text" required id="ProductName">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Product Name</label>
                    </div>

                    <div class="group" style ="margin-left:350px;">   
                    <label for="cat">Category</label><br><br>
                                    <select name="cat" style="height: 35px;width: 140px;" id="ProductCategory">
                                    <!-- this is comming from database -->
                                    </select>
                                    </div>
                    <div class="group" style ="margin-left:350px;">      
                    <input type="text" required id="ProDescription">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Description</label>
                    </div>
                    <div class="group" style ="margin-left:350px;">      
                    <input type="text" required id="purchasePrice">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Purchase Price</label>
                    </div>
                    <div class="group" style ="margin-left:350px;">      
                    <input type="text" required id="salePrice">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Sale Price</label>
                    </div>
                    <div class="group" style ="margin-left:350px;">      
                    <input type="text" required id="stockIn">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Stock In</label>
                    </div>
                    
                </form>
                    
                
                    <h4 align="center" style ="margin-left:350px;">Upload Product Image</h4>
    </br>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" style ="margin-left:350px;">
                        Upload Validation Error<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block" style ="margin-left:350px;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    <img src="/images/{{ Session::get('path') }}" width="300" />
                    @endif
                    <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group" style ="margin-left:350px;">
                        <table class="table">
                        <tr>
                        <!-- <td width="40%" align="right"><label>Select File for Upload</label></td> -->
                        <td width="30"><input type="file" onchange="loadFile(event)" name="select_file" /></td>
                        <td width="30%" align="left"><img width="205%" height="200%"src="" id="output" alt=""><input type="submit" id="button1" name="upload" class="btn btn-warning" value="Upload" onclick="AddProduct()"></td>
                        </tr>
                        <tr>
                        <input id="formPName" type="text" name="pname" hidden/>
                        <td width="40%" align="right"></td>
                        <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                        <td width="30%" align="left"></td>
                        </tr>
                        </table>
                        </div>
                    </form>
                    <br />
                    
                    
                </div>

              



















    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<script>

function updateForm(){
    AddProduct();
}
function AddProduct(){

    var ProductName=document.getElementById("ProductName").value;
		//alert("acceptable"+ProductName);

        var ProductCat=document.getElementById("ProductCategory").value;
		//alert(ProductCat);

        var ProductDes=document.getElementById("ProDescription").value;
		//alert("acceptable"+ProductDes);

        var StockIn=document.getElementById("stockIn").value;
		// //alert("acceptable"+Productremarks);

        var SalePrice=document.getElementById("salePrice").value;
		// //alert("acceptable"+Productsaleprice);

        var PurchasePrice=document.getElementById("purchasePrice").value;
		// //alert("acceptable"+ProductPurchaseprice);

        var PArray = {'ProductName':ProductName,'ProductCat':ProductCat,'ProductDes':ProductDes,'PurchasePrice':PurchasePrice,'SalePrice':SalePrice,'StockIn':StockIn,'Pbarcode':"",'Premark':""};
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            alert( this.responseText);
            }
        };
        var EC=JSON.stringify(PArray);
        document.getElementById("formPName").value=EC;
        // xhttp.open("GET", "./adp/"+EC, true);
        //xhttp.send();
        xhttp.open("POST", "./adp/", true);
        xhttp.setRequestHeader('Content-Type', 'application/json');

        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
        
        xhttp.send(EC);
	    };
    
    
	function getAllCategories(){



    var xhttp = new XMLHttpRequest();


    xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("ProductCategory").innerHTML = this.responseText;




    }

};

xhttp.open("GET", "./fetchCategoriesInOptions", true);
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
xhttp.open("POST", "./logout/", true);
			xhttp.setRequestHeader('Content-Type', 'application/json');

			var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
			xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
			
			xhttp.send(lg);
}

</script>
<script>
  var loadFile = function(event) {
          var image = document.getElementById("output");
          image.src = URL.createObjectURL(event.target.files[0]);
  }
  </script>
</body>

</html>