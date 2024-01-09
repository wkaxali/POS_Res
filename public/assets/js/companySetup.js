// function getTouchScreenStatus() {
//     var checkButton = document.getElementById("toggle-btn")
    
//     var status;
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function () {

//         if (this.readyState == 4 && this.status == 200) {
            
//             checkButton.removeAttribute('disabled');
//             var jsonResponse = JSON.parse(this.responseText);
//             status = jsonResponse[0]['touchToggle'];   
//             if (status == 0) {
//                 checkButton.checked = checkButton.checked
//             } else if (status == 1) {
//                 checkButton.checked = !checkButton.checked
//             }
            
//         }
//     };
    
//     xhttp.open("GET", "./getTouchScreenStatus/", true);

//     xhttp.send();
// }

// function toggleThetouchScreen() {
//     var status
//     var isbuttonchecked = document.getElementById("toggle-btn").checked;
//     if (isbuttonchecked) {
//         status = 1;
//     }
//     else {
//         status = 0
//     }

//     var payLoad = JSON.stringify(status);
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function () {

//         if (this.readyState == 4 && this.status == 200) {
//             if (status == 0) {
//                 alert('Touch Screen OFF!')    
//             } else if (status == 1) {
//                 alert('Touch Screen ON!')    
//             } 
            
//         }
//     };
    
//         xhttp.open("POST", "./changeTouchScreenStatus/", true);
//         xhttp.setRequestHeader('Content-Type', 'application/json');
//         var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
//         xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
//         xhttp.send(payLoad);
// }

function addCompanyInfo() {
    var companyName = document.getElementById("companyName").value;
    var storeName = document.getElementById("storeName").value;
    var address = document.getElementById("address").value;
    var companyEmail = document.getElementById("companyEmail").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var mobileNumber = document.getElementById("mobileNumber").value;
    var ownerName = document.getElementById("ownerName").value;
    var devName = document.getElementById("devName").value;
    var devNumber = document.getElementById("devNumber").value;
    var devAddress = document.getElementById("devAddress").value;
    var TOStext = document.getElementById("TOStext").value;
    var dataObject = {
        "companyName": companyName,
        "storeName": storeName,
        "address": address,
        "companyEmail": companyEmail,
        "phoneNumber": phoneNumber,
        "mobileNumber": mobileNumber,
        "ownerName": ownerName,
        "devName": devName,
        "devNumber": devNumber,
        "devAddress": devAddress,
        "TOStext": TOStext
    }
    
    var payloadObject = JSON.stringify(dataObject);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert("Company " + companyName + " is Added");
        }
    };

   
    xhttp.open("POST", "./addCompanyInfo/", true);
    xhttp.setRequestHeader('Content-Type', 'application/json');

    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    
    xhttp.send(payloadObject);
}