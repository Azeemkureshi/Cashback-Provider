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
    <title>Channel Name Campaigns</title>
  </head>

<body>
  <div class="container1">
          <center>
      <br><br>
      <div class="box">
        <br>
        <h2>Channel Name Campaign<br> Refer And Earn</h2>
        
        <hr class="hr">
    <br>
    <form action='action.php' method='POST'>
      <h5 class="h6paytm">Select Any Offer</h5>
      <select required name="offer">
<!--ADD OFFERS HERE--><!--ADD OFFERS HERE-->
      <option>Register</option>
      <option>...</option>
      <option>...</option>
      <option>...</option>
      <option>...</option>
      <option>...</option>
<!--ADD OFFERS HERE--><!--ADD OFFERS HERE-->
      </select>
            <h5 class="h6paytm">Enter Your Paytm Number</h5>
          <div class='control'>
<i class='material-icons md-36' id='i'>person_outline</i>
          <input  type='number' class='validate' placeholder='Enter Your Paytm Number' name='number' required maxlength='10' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></div>
          	
   <hr class='iii'> <br>
        <button class='btn' name='submit' >Generate Refer Link</button>
</form>
        <form method="POST" action="https://t.me/Channel_Link">
    <button class='done' id='tele'>Click To Join Channel</button>
</form>
<br>
    </div>  
  </body>
</html>