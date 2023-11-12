
<!DOCTYPE html>
<html>
 <head>
  <title>File Uploading in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body onload="preFillFields()">

    <label for="">User ID</label>
    <input type="number" id="userID">
    <br>
    <label for="">Customer Name</label>
    <input type="text" id="name">
    <br>
    <label for="">Customer Contact</label>
    <input type="number" id="contact">
    <br>
    <input type="button" onclick="sendMessage()">


 <script>

function sendMessage(){

    var name=document.getElementById("name").value;
    var contact=document.getElementById("contact").value;
    var userID=1; 
    var encName = encodeURIComponent(name);
    

    var link = "http://127.0.0.1:8000/wa%23name="+encName+"%26contact="+contact+"%26userID="+userID; // Link to Redirect
    window.open("https://api.whatsapp.com/send?phone="+contact+"&text="+link)

}

function preFillFields(){
    var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
    for(var i = 0; i < hashParams.length; i++){
        var p = hashParams[i].split('=');
        document.getElementById(p[0]).value = decodeURIComponent(p[1]);;
    }

    var name=document.getElementById("name").value;
    var contact=document.getElementById("contact").value;
    var userID=document.getElementById("userID").value;
    var addCustomer = [name, "", contact, "", "", "", userID];

    var AC = JSON.stringify(addCustomer);
    
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert(this.responseText);
                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addCustomer/" + AC, true);
            xhttp.send();
            
        }
 </script>
 </body>
</html>

