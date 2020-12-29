<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
     $pin=$_POST["pin"];
     if($pin==""){
     ?>
<body style="background-color:cyan;">
<marquee><h1 style="background-color: rgb(51, 204, 255); text-align: center; color: black;">ATM</marquee></h1>
<h2 style="background-color: rgb(51, 204, 255); text-align: center; color: black;">Welcome To Nano ATM</h2>
<form  method="post" action="first1.php
">
<div align="center">
<!-- <h2 style="text-align: center; font-weight: bold;color:black;">Enter Your Amount </h2> -->
<!-- <input type="number" name="Amount"/> -->
<input type="password" placeholder="Enter  4 Digits " name="pin" style="font-weight: bold; color:black; width:150px ; background-color:rgb(51,204,255);"><br><br>
          <input type="submit" value="Enter" name="bt" onclick="pin()" style="font-weight: bold; color:black; width:80px ; background-color:rgb(51,204,255);">
          <?}?>
          <?php
      if($pin!='') {
        $len=strlen((string)$pin);
        function pin($len){?>
        <? if ($len==4): ?>
            <h2>plss enter valid digits</h2>
      <? elseif($len!=4): ?>
         <p>Invalid Pin!</p>
      <? endif; ?>
        <?php } pin($len);
     }?>
    
</div>
</form>
</body>
</html>
