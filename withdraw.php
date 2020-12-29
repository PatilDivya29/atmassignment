<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(204, 242, 255);">
x
    <?
     $amount=$_POST['withdraw'];
     $balance=10000;
     if($amount==""){
     ?>

    <form action="Withdraw.php" method="post">
    <div style="text-align: center;">
        <h1 style="background-color: rgb(51, 204, 255); text-align: center; color: black;">Enter Amount (Withdraw)</h1>
        <input type="number" name="withdraw" placeholder="Amount"  style="font-weight: bold; color:black; width:80px ; background-color:rgb(51,204,255);"></a><br>
<br><br>
        <input type="submit" name="Enter" value="submit" onclick="withdraw()"  style="font-weight: bold; color:black; width:150px ; background-color:rgb(51,204,255);"></a><br>
<br><br>
    
    <?}
    if($amount!=""){
        if($amount<$balance):{
        $balance=$balance-$amount?>
    <h3><? echo "withdrawal amount is: $amount /-"?></h3>
    <h3><? echo " Your remaining balance is: $balance /-"?></h3>
    <?} elseif($amount>$balance):{?>
    <h3><?echo "Insufficient Balance";}?></h3>
    <? endif;?>
    <? } ?>
    </div>
    </form>
</body>
</html>