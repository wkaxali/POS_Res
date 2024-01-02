<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">
    <style>
        .print {
            background-color: #0a549d;
            color: aliceblue;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84% !important;
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 84% !important;
            }
        }

        .mainCat label {
            width: 150px;
        }

        .new {
            background-color: #0a549d;
            color: #fff;
        }

        .delete {
            background-color: #e61d2f;
            color: #fff;
        }

        .edit {
            border: 1px solid #0a549d;
        }

        .edit:hover {
            border: 1px solid #0a549d;
            background-color: #0a549d;
            color: #fff;

        }

        .add {
            background-color: #0a549d;
            color: #ffffff;
        }

        .btn:hover {
            color: #fff;
        }

        .ctrlTable {
            overflow: auto;
        }
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
    <title>Add Category</title>
</head>

<body onload =" getCategory()">
@include('addcategoryhtml')





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
   
    <script>
    $(document).ready(function () {
            $('#myTables').DataTable();
        });
        $(document).ready(function () {
            $('#myTables').DataTable({
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

    </script>
   
    <script>
    
    function AddCategory() {

        var pName = document.getElementById("cName").value;

        


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        var payload = JSON.stringify({'pName':pName})
        xhttp.open("POST", "./AddCategory/", true);
        xhttp.setRequestHeader('Content-Type', 'application/json');

        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
        
        xhttp.send(payload);


    };

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



                    function getCategory() {
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    var data = this.responseText;
                                    //alert(data);
                                    var table;
                                    var a = JSON.parse(data);

                                    table = $('#stocktable').DataTable();

                                    $.each(a, function (i, item) {

                                        table.row.add([a[i].PCID, a[i].CategoryName
                                        ]);
                                    });
                                    table.draw();
                                

                                }
                            };

                            xhttp.open("GET", "./getCategoryview", true);
                            xhttp.send();
                        }
    </script>



    
</body>

</html>
