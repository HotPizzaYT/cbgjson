<?php
$_SESSION['code'] = rand(59499, 999999);
$username_err = "";
$password_err = "";
$confirm_password_err = "";
$username = "";
$password = "";
$confirm_password = "";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BX4T1LQCFG"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BX4T1LQCFG');
</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script>
      function skey(event){
        if(event.keyCode === 13){
          sendB();
        }
      }
      function refreshChat(){
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
     // twemoji.parse(document.body);
    }
  };
  xhttp.open("GET", "innerchat.php", true);
  xhttp.send();

      }
      function sendB(){
var xhttp = new XMLHttpRequest();
m = document.getElementById("m").value;
u = "test";
col = "black";
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       console.log("message sent");
       console.log("ANTI-LOUIS TIPS\n===========\nAlways make your password different for every site\nDon't open ports for FTP or OpenSSH\n\nThank you for finding this neat little easter egg. Stay safe.");
    }
  };
  xhttp.open("POST", "sender.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("m=" + encodeURIComponent(m) + "&u=" + encodeURIComponent(u) + "&col=" + encodeURIComponent(col));
  // reload chat
  document.getElementById("m").value = "";
      }
      window.xyz = setInterval(function(){ refreshChat(); }, 2000);
    </script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        #demo {
          overflow-y: scroll;
          height: 200px;
          
        }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>cbgjson</h2>
        <div id="demo"></div>
        <input id="m" onkeypress="skey(event)" placeholder="Enter your message" />
        <button onclick="sendB();">Send!</button>
    </div>    
</body>
</html>