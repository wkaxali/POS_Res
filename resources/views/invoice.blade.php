<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Receipt example</title>

        <style>

* {
    font-size: 10px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.description,
th.description {
    width:95px;
    max-width:95px;
}

td.quantity,
th.quantity {
    width: 30px;
    max-width: 30px;
    
}

td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 155px;
    max-width: 155px;
    max-height: 155px;
}

.ticket {
           padding-top: 0px;
           padding-bottom: 0px ;
         }

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
 
    @page  
{ 

    size: 75mm 60mm; 
    /* this affects the margin in the printer settings */ 
    margin: 0mm 0mm 0mm 0mm;
} 
        
}

body
{
  margin: 0pt 0pt 0pt 0pt;
  
}

        </style>
    </head>
    <body onload="getDataForPrinting()">
        <div class="ticket">
        <button id="btnPrint" class="hidden-print">Print</button><br><br><br>
            <h3 class="centered">KhyberPass Resturant
                <br> 
                <br> 716 Romford Road Manor Park<br>Phone   : +44 115 924 4044 <br>
                <br><table>
                </h3>
                <!-- <tr>
                         <p id ="data"></p>
                    </tr> -->
                    
                     
                     <td id="data"> </td>
                     
                 
                     
                    
                     
        </div>
         
        <script src="script.js"></script>

        <script>
            var btnPrint = document.querySelector("#btnPrint");
            btnPrint.addEventListener("click", () => {
                window.print();
            });
        </script>
        <script>
           function getDataForPrinting (){
            var xhttp = new XMLHttpRequest();
                 xhttp.onreadystatechange = function () {
                 if (this.readyState == 4 && this.status == 200) {
                var data=this.responseText;
                 
                document.getElementById("data").innerHTML=data;
                
            }
        };
        xhttp.open("GET", "./thermalPrinting/" , true);
        xhttp.send();
            }
        </script>
    </body>
</html>