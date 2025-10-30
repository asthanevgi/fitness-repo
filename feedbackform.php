<?php

 $name = $_POST["fname"];
 $mail = $_POST["email"];
 $msg = $_POST["message"];


$servername="localhost";
$username="root";
$password="";
$db="fitness";


$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
} 


$sql="INSERT INTO feedback (FullName, Email, Message) values('$name','$mail', '$msg')";
if($conn->query($sql)===TRUE)
{
    echo "Feedback Submitted successfully";
}
else
{
    echo "Error submitting feedback:".$conn->error;

}
$conn->close();
?>