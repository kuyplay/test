<?php
	                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['submit'])) {
		                $conn = mysqli_connect('localhost', 'root', '','register_login') or die("Connection failed: " . mysqli_connect_error());
		                if (isSet($_POST['user']) && isSet($_POST['pass']) && isSet($_POST['email'])) {
			                $user = $_POST['user'];
			                $email = $_POST['email'];
			                $pass = $_POST['pass'];
 
			            $sql = "INSERT INTO `users` (`username`,`email`,`password`) VALUES ('$user', '$email', '$pass')";
 
			            $query = mysqli_query($conn,$sql);
			            if ($query) {
				            echo 'Data Successfullu Saved!';

			            } else {
				            echo "An error occured while save the data.";
			            }
		                }
	                    }
                    ?>