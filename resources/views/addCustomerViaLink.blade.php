
<!DOCTYPE html>
<html>
 <head>
  <title>File Uploading in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

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

    window.open("https://api.whatsapp.com/send?phone="+contact+"&text="+name)

    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200){
    //         //alert(this.response);
    //     }
    // }
    
    // xhttp.open("GET", "./adp/", true);
    // xhttp.send();

}
 </script>
 </body>
</html>

