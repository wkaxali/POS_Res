//sales.js
//first script
var toggle = true;
function displayFooterSection() { 
    var footerSectionHTML = ''
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
              var data = JSON.parse(this.responseText);
              console.log(data)
              footerSectionHTML = `  <!-- footer section -->
              <footer class="footer_section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 footer-col">
                      <div class="footer_contact">
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

//second script
function getAllInvoiceDetails() {

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
            document.getElementById("CustomerCategory").value = a[0].CustomerCatogery;
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
    // document.getElementById("warning").style.display = "block";

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
         
            var a = JSON.parse(data);
            document.getElementById("CID").value = a[0].CustomerID;
            document.getElementById("LastBalance").value = a[0].Balance;
            document.getElementById("CurrentBalance").value = a[0].Balance;
            document.getElementById("CNO").value = a[0].Contect;
            document.getElementById("CustomerCategory").value = a[0].CustomerCatogery;

            document.getElementById("Total").value = a[0].TotalAmount;
            document.getElementById("DiscountOverall").value = a[0].Discount;
            grossTotal = Number(a[0].TotalAmount)-Number(a[0].Discount);
            document.getElementById("grossTotal").value = grossTotal;
            document.getElementById("tax").value = a[0].VAT;
            document.getElementById("NetTotal").value = a[0].NetTotal;
            document.getElementById("AmountPaid").value = a[0].AmountPaid;
            document.getElementById("RemainingBalance").value = a[0].Balance;

            document.getElementById("kilometersDriven").value = a[0].KilometerDriven;
            document.getElementById("chassisNumber").value = a[0].VehicalChassisNo;
            document.getElementById("regNumber").value = a[0].VehicalReg;
            
            $('#CustomerName').val(a[0].CustomerID);
            $('#CustomerName').selectpicker('refresh');
            $('#accounts').val(a[0].AID);
            // $('#accounts').selectpicker('refresh');
            $('#vehicals').val(a[0].VehicalID);
            // $('#vehicals').selectpicker('refresh');
            taxCalculation();
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
                var discount = a[i].DiscountOffered;
                var quantity = a[i].Quantity;
                var PerUnitSalePrice = a[i].PerUnitSalePrice;
                var company = a[i].Company;
                var productName = a[i].ProductName;
                var totalAmount = a[i].NetAmount;
                var PurchasePrice = a[i].PerUnitPurchasePrice;

                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);
                

                cell1.innerHTML = PID;
                cell2.innerHTML = productName;
                cell3.innerHTML = company;
                cell4.innerHTML = PerUnitSalePrice;
                cell5.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value='+quantity+'>';
                cell6.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value='+discount+'>';
                // cell5.innerHTML = "<input type='Text' value='"+quantity+"'>";
                // cell6.innerHTML = "<input type='Text' value='"+discount+"'>";
                cell7.innerHTML = totalAmount;
                //calc();
                cell8.innerHTML =
                    "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";
                cell9.innerHTML = PurchasePrice;
                cell9.style.display = 'none';
                
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




// function getVehicals(){
//     document.getElementById("regNumber").value = "";
//     document.getElementById("kilometersDriven").value = "";
//     document.getElementById("chassisNumber").value = "";
    
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function () {

//         if (this.readyState == 4 && this.status == 200) {
            
//             // document.getElementById("vehicals").innerHTML = this.response;
//             // // $('#vehicals').form-select('refresh');
//             // $('#vehicals').append($('<option>', { "lun":"lin"}));

            
//         }
//     };
    
//     xhttp.open("GET", "./loadAutos/", true);

//     xhttp.send();
// }

// NEWCODEBELOWNOTTOBECOMMITEDYET

function getCategories() {
    document.getElementById("updateBtn").disabled = true; 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            var table='';
            var a = JSON.parse(data);
            $.each(a, function (i, item) {
                table=table + '<li class="list_highlight" onclick="showMenu('+a[i].PCID +')">'+a[i].CategoryName+'</li>'
                
            });
            document.getElementById("menuCategory").innerHTML = table;
            // document.getElementById("footerSection").innerHTML = footerSectionHtml;
            displayFooterSection()
            const listItems = document.querySelectorAll('.list_highlight');
            document.querySelectorAll('.list_highlight')[0].classList.toggle('clicked')
            showMenu(1);
            listItems.forEach(item => {
              item.addEventListener('click', () => {
                listItems.forEach(otherItem => {
                  otherItem.classList.remove('clicked');
                });
                item.classList.add('clicked');
              });
            });
            
        }
    };

    xhttp.open("GET", "./getCategories/", true);
    xhttp.send();
    // loadAccounts();
    loadAllCustomers();
    // getVehicals();
    getInvoiceID();
    getSaleHistory();
    calc();
    getCompanyName();
 }



 function showMenu(data){
  
    var PCID=data;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            var table='';
            var a = JSON.parse(data);

                
            
            $.each(a, function (i, item) {

                var PID=a[i].ProductID;
                var pName=a[i].ProductName;
                var salePrice = a[i].PerUnitSalePrice;
                var description = a[i].description;
                var purchasePrice = a[i].PerUnitPurchasePrice;            
                var companyName = a[i].Company;
                
                table = table +'<div class="col-sm-6 col-lg-4 all burger"><div class="box"> <div class="detail-box"><h5>'+ pName + '</h5><p> '+ description +' </p><div class="options"><h6> '+salePrice+' </h6 > <a onclick="addProduct('+PID+', \''+ pName + '\', '+salePrice+', \''+ companyName +'\', '+purchasePrice+')" >+</a> </div > </div > </div></div>'
              
            

                // table=table+'<tr ><button class="productBtn btn-shine" onclick="addProduct('+PID+', \''+ pName + '\', '+salePrice+', \''+ companyName +'\', '+purchasePrice+')"><span>'+a[i].ProductName+'<br>'+a[i].PerUnitSalePrice+'&#163</span></button>&nbsp</tr>';
                });
            document.getElementById("menuItems").innerHTML = table;
            // document.getElementById("footerSection").innerHTML = footerSectionHtml;
            displayFooterSection()
            

        }
    };
    xhttp.open("GET", "./getMenu/"+PCID, true);
    xhttp.send();
}
 
 document.addEventListener('DOMContentLoaded', function() {
    var container = document.getElementById('menuItems');

    container.addEventListener('click', function(event) {
        if (event.target.tagName === 'A') {
            var anchor = event.target;
            var currentContent = anchor.textContent;
            
            if (currentContent === '+') {
                anchor.textContent = '✓'; // Replace with your tick mark character
            } else {
                anchor.textContent = '+';
            }
        }
    });
 });

function addProduct(PID, pName, salePrice, companyName, purchasePrice) {
    updateCartCounter()  
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
        var cell8 = row.insertCell(7);
        // var cell9 = row.insertCell(8);


        cell1.innerHTML = PID;
        cell2.innerHTML = pName;
        // cell3.innerHTML = companyName;
        cell3.innerHTML = salePrice;
            
        cell4.innerHTML =
        '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
        cell5.innerHTML = '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=0.0>';
        var tot = salePrice * 1;
        cell6.innerHTML = tot;
        calc();
        cell7.innerHTML =
                "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";
            cell8.innerHTML = purchasePrice;
            cell8.style.display = 'none';

    } else {
        alert("Quantity Increased");
    }
}
function updateCartCounter() {
    var cartCount = document.getElementById("cart-item-count").innerHTML
    count = Number(cartCount)
    count++
    document.getElementById("cart-item-count").innerHTML = count 
}
//  NEWCODEABOVENOTTOBECOMMITEDYET
function getAllProducts() {

    document.getElementById("updateBtn").disabled = true;
    document.getElementById("warning").style.display = "none";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
           
            var table;
            var a = JSON.parse(data);
            
            table = $('#searchProductTable').DataTable();
            //table = document.getElementById("searchProductTable")
            $.each(a, function (i, item) {

                table.row.add([
                    a[i].ProductID, a[i].ProductName, a[i].Company, 
                    a[i].PerUnitSalePrice,
                    a[i].StockIn, a[i].PerUnitPurchasePrice
                ]);
            });
            
            table.columns.adjust().draw();
            table.column( 5 ).visible( false );
        }
    };

    xhttp.open("GET", "./getAllProducts/", true);
    xhttp.send();
    calc();
    loadAllCustomers();
    loadAccounts();
    getInvoiceID();
    getSaleHistory();
    getVehicals();

};



function loadAllCustomers() {



    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("CustomerName").innerHTML =
                this.responseText;
        }
    };

    xhttp.open("GET", "./getAllCustomers", true);
    xhttp.send();
};

function getCurrentCustomerInfo() {
    if ($('#CustomerName').find(":selected").val() == "Select Customer") {
        document.getElementById("CoinsAvailable").innerHTML="COINS: 0"

        
    }
    else {
        var xhttp = new XMLHttpRequest();
        showdata();

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                var a = JSON.parse(data);
                document.getElementById("CID").value = a[0].CustomerID;
                document.getElementById("LastBalance").value = a[0].Balance;
                document.getElementById("CurrentBalance").value = a[0].Balance;
                document.getElementById("CNO").value = a[0].Contect;
                document.getElementById("CustomerCategory").value = a[0].CustomerCatogery;
                calc();




            } else {
            
            }
        };
        var CustomerID = $('#CustomerName').find(":selected").val();

        xhttp.open("GET", "./getCustomersInfo/" + CustomerID, true);
        xhttp.send();

    }
}

function showdata() {
    var ID = $('#CustomerName').find(":selected").val();  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data=this.responseText;
            a = JSON.parse(data);
            document.getElementById("CoinsAvailable").innerHTML="COINS: "

            document.getElementById("CoinsAvailable").innerHTML+=a[0].CoinBalance || 0;
        }
    };
    xhttp.open("GET", "./logedInCustomerData/" + ID, true);
    xhttp.send();
}
  
function UseCoins(){
    AC= document.getElementById("CoinsAvailable").innerText;
    CTU=document.getElementById("CoinsToBeUsed").value;
    if(Number(CTU)<=Number(AC.substring(7))){
        var conversionRate=getCoinsConversionRateOfThisCustomer(1);
        actusalDiscount=parseFloat(CTU)/parseFloat(conversionRate);  
        document.getElementById("coinsDiscounts").value=actusalDiscount;

    }else{
        alert("You have "+AC.substring(7)+" Coins only");
        document.getElementById("CoinsToBeUsed").value=0;
        UseCoins()
    }

        calc();
}
    
function getCoinsConversionRateOfThisCustomer(id){
    return 100;
}
function loadAccounts() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("accounts").innerHTML = this.response;
            // $('#accounts').selectpicker('refresh');
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

    // code to read selected table row cell data (values).
    $("#searchProductTable").on('click', 'tr', function () {
        // get the current row


        var table1 = $('#searchProductTable').DataTable();
        var row = table1.row(this).data();
       
        var table = document.getElementById("ProductSaleTable");

        var PID = this.cells[0].innerText; // get current row 1st TD value
        var PNAME = this.cells[1].innerText; // get current row 2nd TD
        //var qty=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
        var CompanyName = this.cells[2].innerText; // get current row 3rd TD
        var SalePrice = this.cells[3].innerText; // get current row 3rd TD
        var qty = 1;
        var purchasePrice = row[5]; // get current row 3rd TD
       
        
        if (IsItemExistInDataTable(PID)) {


            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);  
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);
            var cell9 = row.insertCell(8);
           
            

            cell1.innerHTML = PID;
            cell2.innerHTML = PNAME;
            cell3.innerHTML = CompanyName;
            cell4.innerHTML = SalePrice;
            cell5.innerHTML =
                '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
            cell6.innerHTML =
                '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=0.0>';
            var tot = SalePrice * 1;
            cell7.innerHTML = tot;
            calc();
            cell8.innerHTML =
                "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";
            cell9.innerHTML = purchasePrice;
            cell9.style.display = 'none';
        } else {
            alert("Quantity Increased");
        }
    });
});



function taxCalculation() {

    var taxRate = document.getElementById('tax').value;
    var grosstotal = document.getElementById('grossTotal').value;
  
    var tax = Number(grosstotal) * (taxRate / 100);
    document.getElementById('taxAmount').value = tax;
   
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



    // value of per unit price is got in 

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


            var qty = row.cells[4].children[0].value;
            qty++;
            row.cells[4].children[0].value = qty;
            calculationTrigerOnQtyValueChange(row.cells[4].children[0]);




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

   
    var productDetails = [];
    var table = document.getElementById("ProductSaleTable");
    //var myRow2 = [];

    
    $('#ProductSaleTable tr').each(function (row, tr) {

        productDetails[row] = [

            $(tr).find('td:eq(0)').text(), //productID

            $(tr).find('td:eq(3)').text(), //salePrice
            $(tr).find('td:eq(4) input[type="text"]').val(), //qty
            $(tr).find('td:eq(5) input[type="text"]').val(), //discount
            $(tr).find('td:eq(6)').text(), //totamount
            $(tr).find('td:eq(8)').text() //Purchase Price


        ];


    });
    productDetails.shift();

    //var invoiceNumber=getInvoiceID();
    var tot = document.getElementById("Total").value;
    var discount = document.getElementById('DiscountOverall').value;
    if (discount == "") {

        discount = 0;
        document.getElementById('DiscountOverall').value = 0;

    }

    var gross = document.getElementById('grossTotal').value;
    var tax = document.getElementById('tax').value;
    var netTotal = document.getElementById('NetTotal').value;
    var amp = document.getElementById('AmountPaid').value;
    var rmb = document.getElementById("RemainingBalance").value;
    var CID = document.getElementById("CID").value;
    var CLB = document.getElementById("LastBalance").value;
    var CCB = document.getElementById("CurrentBalance").value;
    var AID = $('#accounts').find(":selected").val();
    var CustomerID = $('#CustomerName').find(":selected").val();
    var vehicalName = $('#vehicals').find(":selected").val();
    var chassisNumber = document.getElementById("chassisNumber").value;
    var CCB = document.getElementById("CurrentBalance").value;
    var regNumber = document.getElementById("regNumber").value;
    var kilometersDriven = document.getElementById("kilometersDriven").value;
    
    if (discount == "") {
        document.getElementById('DiscountOverall').value = 0;

    }if (tax == "") {
        document.getElementById('tax').value = 0;
    }

    if (AID == "") {
        alert("Payment Method not selected");
    }else if (CustomerID == " ") {
        alert("Customer not selected");
    }else if (productDetails == "") {
        alert("Please Select a Product");
    }else if (discount == "") {
        alert('Please fill "Discount" Field');
    }else if (tax == "") {
        alert('Please fill "Tax" Field');
    }else if (amp == "") {
        alert('Please fill "Amount Paid" Field');
    }else {

   // myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID,vehicalName, chassisNumber, regNumber, kilometersDriven];
   var productDetailsVarNames = ['productID','salePrice','qty','discount','totamount','PurchasePrice'];
   

   //this code block takes care of any number of entries in product table
   var productDetailsObjectArray = []
   for(var n =0; n<productDetails.length; n++){
        var productDetailsObject = {};
        for (var i = 0; i < productDetails[n].length; i++) {
            productDetailsObject[productDetailsVarNames[i]] = productDetails[n][i];
            }
        productDetailsObjectArray.push(productDetailsObject);
    }


    var myRow2Object = {
        'productDetailsObjectArray': productDetailsObjectArray,//make relevant var names
        'tot': tot,
        'discount': discount,
        'gross': gross,
        'tax': tax,
        'netTotal': netTotal,
        'amp': amp,
        'rmb': rmb,
        'CID': CID,
        'CLB': CLB,
        'CCB': CCB,
        'AID': AID,
        'vehicalName': vehicalName,
        'chassisNumber': chassisNumber,
        'regNumber': regNumber,
        'kilometersDriven': kilometersDriven
      };

      


    var array = JSON.stringify(myRow2Object);

    var xhttp = new XMLHttpRequest();
    

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
                alert("Invoice =" + this.responseText + " is generated here");
                window.open("./testpdf/as");

            }
        };
        // xhttp.open("GET", "./addSalesForSS/" + array,true);
        // xhttp.send();

        xhttp.open("POST", "./addSalesForSS/", true);
        xhttp.setRequestHeader('Content-Type', 'application/json');
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        xhttp.setRequestHeader("X-CSRF-TOKEN",csrfToken );
        xhttp.send(array);

    }

}
function getCompanyName(){
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
    var headerTitle = document.getElementById("headerTitle")
          if (this.readyState == 4 && this.status == 200) {
              var data= JSON.parse(this.responseText);
              document.title = data[0]['CompanyName']
              headerTitle.innerHTML = data[0]['CompanyName']
          }
      };
     
      xhttp.open("GET", "./getCompanyInfo/", true);
 
      xhttp.send();
     }
function getTouchScreenStatus() {
 
    const partsButton = document.getElementById("stockButton")

    var status;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            
            var jsonResponse = JSON.parse(this.responseText);
            status = jsonResponse[0]['touchToggle'];
                
            if (status == 0) {
                partsButton.dataset.target = '.bd-example-modal-x2'
                
            } else if (status == 1) {
                partsButton.dataset.target = '.bd-example-modal-x1'
             
            }
            
        }
    };

    xhttp.open("GET", "./getTouchScreenStatus/", true);

    xhttp.send();
}
function print(){
    window.open("./thermalPrinting");
}

function UpdateSaleInvoice() {

    var productDetails = [];
    var table = document.getElementById("ProductSaleTable");
    var myRow2 = [];

    
    $('#ProductSaleTable tr').each(function (row, tr) {

        productDetails[row] = [

            $(tr).find('td:eq(0)').text(), //productID
            $(tr).find('td:eq(3)').text(), //salePrice
            $(tr).find('td:eq(4) input[type="text"]').val(), //qty
            $(tr).find('td:eq(5) input[type="text"]').val(), //discount
            $(tr).find('td:eq(6)').text(), //totamount
            $(tr).find('td:eq(8)').text() //PurchasePrice


        ];


    });
    productDetails.shift();

    //var invoiceNumber=getInvoiceID();
    var tot = document.getElementById("Total").value;
    var customerName = $('#CustomerName').find(":selected").text();
    var contact = document.getElementById('CNO').value;
    var discount = document.getElementById('DiscountOverall').value;
    var invoiceID = document.getElementById('InvoiceID').value;
    var gross = document.getElementById('grossTotal').value;
    var tax = document.getElementById('tax').value;
    var netTotal = document.getElementById('NetTotal').value;
    var amp = document.getElementById('AmountPaid').value;
    var rmb = document.getElementById("RemainingBalance").value;
    var CID = document.getElementById("CID").value;
    var CLB = document.getElementById("LastBalance").value;
    var CCB = document.getElementById("CurrentBalance").value;
    var AID = $('#accounts').find(":selected").val();

    var vehicalID = $('#vehicals').find(":selected").val();
    var chassisNo = document.getElementById("chassisNumber").value;
    var regNumber = document.getElementById("regNumber").value;
    var kilometers = document.getElementById("kilometersDriven").value;
    var CustomerID = $('#CustomerName').find(":selected").val();

    if (discount == "") {
        document.getElementById('DiscountOverall').value = 0;
        
    }if (tax == "") {
        document.getElementById('tax').value = 0;
    }

    if (AID == "") {
        alert("Payment Method not selected");
    }else if (CustomerID == " ") {
        alert("Customer not selected");
    }else if (productDetails == "") {
        alert("Please Select a Product");
    }else if (discount == "") {
        alert('Please fill "Discount" Field');
    }else if (tax == "") {
        alert('Please fill "Tax" Field');
    }else if (amp == "") {
        alert('Please fill "Amount Paid" Field');
    }else {
        

    //myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID, customerName,contact, vehicalID, chassisNo, regNumber, kilometers];
    var productDetailsVarNames = ['productID','salePrice','qty','discount','totamount','PurchasePrice'];
    
    var productDetailsObjectArray = []
    for(var n =0; n<productDetails.length; n++){
        var productDetailsObject = {};
        for (var i = 0; i < productDetails[n].length; i++) {
            productDetailsObject[productDetailsVarNames[i]] = productDetails[n][i];
            }
        productDetailsObjectArray.push(productDetailsObject);
    }

       var myRow2Object = {
            'productDetailsObjectArray': productDetailsObjectArray,
            'tot': tot,
            'discount': discount,
            'gross': gross,
            'tax': tax,
            'netTotal': netTotal,
            'amp': amp,
            'rmb': rmb,
            'CID': CID,
            'CLB': CLB,
            'CCB': CCB,
            'AID': AID,
            'customerName': customerName,
            'contact': contact,
            'vehicalID': vehicalID,
            'chassisNo': chassisNo,
            'regNumber': regNumber,
            'kilometers': kilometers
          };
         

    var array = JSON.stringify(myRow2Object);



    var xhttp = new XMLHttpRequest();



        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Invoice =" + this.responseText + " is generated");

            }
        };

        //xhttp.open("GET", "./updateInvoice/" + invoiceID, true);
        // var MenuID=$('#Menus').find(":selected").val();

        xhttp.open("POST", "./updateInvoice/" + invoiceID, true);
        xhttp.setRequestHeader('Content-Type', 'application/json');
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
        xhttp.send(array);
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

$(document).ready(function () {
$("#saleHistoryTable").on('click', 'tr', function () {
var InvoiceID = this.cells[0].innerText; // get current row 1st ID value
document.getElementById("InvoiceID").value=InvoiceID;
getInvoiceCustomer();
});
});



function getSaleHistory() {

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {

        var data = this.responseText;
        var table;
        var a = JSON.parse(data);
        table = $('#saleHistoryTable').DataTable();

        $.each(a, function (i, item) {
            table.row.add([
                a[i].InvoiceNo, a[i].CustomerName, a[i].AccountName+" ("+a[i].AccountNumber+")",
                a[i].TotalAmount, a[i].AmountPaid, a[i].Balance, 
                a[i].DateStamp
            ]);
        });
        
        table.draw();
        
        

    }
};
//alert("ljd");
xhttp.open("GET", "./getSSHistory/", true);

xhttp.send();


}
