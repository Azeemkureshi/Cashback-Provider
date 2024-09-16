<?php
if(isset($_POST['submit'])){
$paytm=$_POST['number'];
$domain=$_SERVER['SERVER_NAME'];
$offer=$_POST['offer'];

$paytmencod=base64_encode($paytm);

$url="https://$domain/$offer/?ref=$paytmencod";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">

<title>Channel name Campaigns</title>
  </head>
  <body>

    <div class="container1">
          <center>
      <br><br>
      <div class="box">
        <br>
        <h2>Ch Name Campaign<br> Refer And Earn</h2>
        
        <hr class="hr">
    <br>
      
            <h5 class="h6paytm">Your Generated Link</h5>
          <div class='control'>
          <input  type='text'id="myInput" class='validate' required value="<?php echo $url ; ?>"></div>
          	
   <hr class='iii'> <br>
        <button class='btn' onclick="myFunction()" name='submit' >Copy The Link</button>
        <form method="POST" action="https://t.me/Channel_Link">
    <button class='done' id='tele'>Click To Join Channel</button>
</form>
<br><br><br>
    </div>


<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Succesfuly Copied : " + copyText.value);
}
</script>

     
  </body>
</html>
