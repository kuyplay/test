<?php 
include('dbcon.php'); /*  untuk konek ke database */
include('session.php'); /* untuk login sesion ID */
 
$result=mysqli_query($conn, "SELECT * from users where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<!DOCTYPE >
<html>
<head>
     <title> Desain </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="image/Ice-cream-gelato-pink-logo-on-transparent-background-PNG.png" class="logo">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="" >Product</a></li>
                    <li><a href="">Order</a></li>
                </ul>
            </nav>
            <div class="logout">
            <a href="logout.php" class="btn">Keluar</a>
            </div>
            <img src="image/cart.png" class="cart">
        </div>
    <div class="content">
        <a href="" class="btn">2023 Famous Ice Cream</a>
        <h1>Make You <br> Happy Averydays</h1>
        <p>Favorite gelato ice cream. </p>
    </div>
    <img src="image/Lovepik_com-401297995-girl-selling-ice-cream.png" class="feature-img">
    </div>
</body>
</html>