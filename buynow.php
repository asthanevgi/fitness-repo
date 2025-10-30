<?php

 $cname = $_POST["Name"];
 $cno = $_POST["Number"];
 $addr = $_POST["Address"];
 $car = $_POST["category"];
 $prod = $_POST["pro"];
 $qty = $_POST["quantity"];
 $cash = $_POST["checkcod"];
 $privacy = $_POST["privacyPolicy"];

$servername="localhost";
$username="root";
$password="";
$db="fitness";


$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
} 


$sql="INSERT INTO buynow (CustomerName, CustomerNumber, DeliveryAddress, Category, Product, Quantity, COD, Policy) values('$cname','$cno', '$addr', '$car', '$prod', '$qty', '$cash', '$privacy')";
if($conn->query($sql)===TRUE)
{
    echo "Order Placed successfully";
}
else
{
    echo "Error placing order:".$conn->error;

}
$conn->close();
?>

<html>
<body>
<h1> Order Details</h1>
Name: <?php echo $_POST["Name"];?> <br>
Number: <?php echo $_POST["Number"];?> <br>
Address: <?php echo $_POST["Address"];?> <br>
Category: <?php echo $_POST["category"];?> <br>
Product: <?php echo $_POST["pro"];?> <br>
Quantity: <?php echo $_POST["quantity"];?> <br>
Payment Mode: <?php echo $_POST["checkcod"];?> <br>
Privacy Policy: <?php echo $_POST["privacyPolicy"];?> <br>

</body>
</html>