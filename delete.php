<?php

$order = $_POST["order"];


$servername="localhost";
$username="root";
$password="";
$db="fitness";


$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
} 


$sql="delete from buynow where OrderID='$order'";
if($conn->query($sql)===TRUE)
{
    echo "Order Cancelled successfully";
}
else
{
    echo "Error Cancelling Order:".$conn->error;

}
$conn->close();
?>