<?php
$od=$_POST["order"];
$qty=$_POST["quantity"];
$conn=new mysqli("localhost","root","","fitness");
$sql1="update buynow SET Quantity='$qty' WHERE OrderID='$od'";
if($conn->query($sql1) === TRUE)
{
    echo "Update Success";
}
else
{
    echo "Error: " . $conn->error . "<br>";
}
?>