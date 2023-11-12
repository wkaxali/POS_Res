<!DOCTYPE html>
<html>
  <head>
    <title>Javascript Numpad</title>

    <!-- (A) LOAD JS + CSS -->
    <!--
    <link rel="stylesheet" href="numpad-light.css"/>
    -->
    <link rel="stylesheet" href="numpad-dark.css"/>
    <script src="numpad.js"></script>
  </head>
  <body>
    <!-- (B) INPUT FIELDS -->
    Field A: <input type="text" id="demoA"/>
    <br><br>
    Field B: <textarea id="demoB"></textarea>

    <!-- (C) ATTACH NUMPAD -->
    <script>
    window.addEventListener("load", function(){
      // (C1) BASIC
      numpad.attach({target: document.getElementById("demoA")});

      // (C2) ALL OPTIONS
      numpad.attach({
        target: document.getElementById("demoB"),
        max: 10, // MAX 10 DIGITS
        decimal: false, // NO DECIMALS ALLOWED
        onselect : function () { // CALL THIS AFTER SELECTING NUMBER
          alert("DEMO B number set.");
        }
      });
    });
    </script>
  </body>
</html>
