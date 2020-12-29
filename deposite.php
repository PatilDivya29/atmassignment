<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body style="background-color: cyan;">
    <?
    $balance=10000;
    $amount=$_POST['deposite'];
    if($amount==""){
    ?>
    <div style="text-align: center;">
    <form action="Deposite.php" method="post">
        <h1 style="background-color: rgb(51, 204, 255); text-align: center; color: black;">Enter Amount (Deposite)</h1>
        <input type="number" name="deposite" placeholder="Amount" style="font-weight: bold; color:black; width:80px ; background-color:rgb(51,204,255);"><br><br>
        <input type="submit" name="submit" value="submit" onclick="deposite()" style="font-weight: bold; color:black; width:80px ; background-color:rgb(51,204,255);">
    <?}?>
    <?
    if($amount!='') {
    $balance=$balance+$amount?>
    <h3><?echo "Deposite amount is: $amount /-";?></h3>
    <h3><? echo "Total balance is: $balance /-";?></h3>
    <?}?>

    </div>
    
    </form>

</body>
</html>