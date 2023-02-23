<?php
	if (isset($_POST['submit-btn'])) /* tombol untuk masuk */
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']); 
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
 
			$query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:home.php');
 
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>