<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="navstyle.css">
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="home.html" class="active"><b>HOME</b></a></li>
            <li><a href="weights.html"><b>WEIGHTS</b></a></li>
            <li><a href="machines.html"><b>MACHINES</b></a></li>
            <li><a href="workout.html"><b>STAY-FIT PLAN</b></a></li>
            <li><a href="cart.html"><b>CART</b></a></li>
            <li><a href="orders.php"><b>MY ORDERS</b></a></li>
            
        </ul>
    </nav>
    
<div class="row justify-content-center my-5">
    <div class="col-8">
<?php
$conn=new mysqli("localhost","root","","fitness");

$sql="SELECT OrderID, CustomerName, Product, Quantity FROM buynow";
$result=$conn->query($sql);//execute the query(by using the query method),it will be stored in the result set

if($result->num_rows >0)//if there is more than one row then it wants to display one row
{
    echo "<table class='table table-striped table-dark table table-hover'>";
    echo "<tr>";
    echo "<th> Order ID</th><th> Customer Name</th><th> Product</th><th> Quantity</th><th></th><th></th>";
    echo "</tr>";
    foreach($result as $row)
    {
        echo "<tr><td>".$row ['OrderID']."</td>";
        echo "<td>".$row ['CustomerName']."</td>";
        echo "<td>".$row ['Product']."</td>";
        echo "<td>".$row ['Quantity']."</td>";
        echo "<td><a href='update.php?OrderID=".($row['OrderID'])."'class='btn btn-primary btn-sm'>Update Your Order</a></td>";
        echo "<td><a href='deletedata.php?OrderID=".($row['OrderID'])."'class='btn btn-primary btn-sm'>Cancel Your Order</a></td></tr>";
        
    }


    echo "</table>";
}

?>
</div> 
</div>
<footer class="bg-dark text-center text-white py-3">
    © 2025 FitTech Hub | <a href="policy.html" class="text-warning">Privacy Policy</a> | Contact:7411223344 | Email: fittechhub@gmail.com
  </footer>
</body>
</html>