<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="navstyle.css">
</head>
<body>
<nav>
        <ul>
            <li><a href="home.html" class="active"><b>HOME</b></a></li>
            <li><a href="weights.html"><b>WEIGHTS</b></a></li>
            <li><a href="machines.html"><b>MACHINES </b></a></li>
            <li><a href="workout.html"><b>STAY-FIT PLAN</b></a></li>
            <li><a href="cart.html"><b>CART</b></a></li>
            <li><a href="orders.php"><b>MY ORDERS</b></a></li>
        </ul>
    </nav>
<div class="row justify-content-center my-5">   
<div class="col-3  border border-5 border-dark p-4">
<h2>Cancel Order</h2>
<h3><?php
    $order=$_GET['OrderID'];
  
    echo "Your Order ID is $order";
   

    $conn=new mysqli("localhost","root","","fitness");
    $sql="select * from buynow where OrderID='$order'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();


    ?></h3>
    <form action="delete.php" method="post" >
        
        <div class="my-3">

        <input type="text" name="order" id="order" value="<?php echo $row['OrderID'];?>">
        </div>
        <div class="my-3">
        
            <div class="my-3">
        <input type="submit" value="Cancel Order" class="btn btn-danger">
        </div>

    </form>
    </div>
    </div>
    <p></p>
    <h3 class="text-center" >Once the order is cancelled you won't be able to revote this action</h3><br><br><br><br><br><br>

   
    <footer class="bg-dark text-center text-white py-3">
        © 2025 FitTech Hub | <a href="policy.html" class="text-warning">Privacy Policy</a> | Contact:7411223344 | Email: fittechhub@gmail.com
      </footer>
     
</body>
</html>