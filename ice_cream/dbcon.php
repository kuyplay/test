<?php
$conn = mysqli_connect("localhost","root","","register_login");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!-- $conn = mysqli_connect('localhost', 'root', '','register_login') or die("Connection failed: " . mysqli_connect_error()); -->