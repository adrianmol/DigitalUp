<?php
			
	include "dbconnect.php";

		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

			$email = mysqli_real_escape_string($db, $_POST['email']);

			$sqlcheck = "SELECT email FROM users WHERE email = '$email' ";
			$checkResult = $db->query($sqlcheck);

			if($checkResult->num_rows > 0) {
                echo "<br>"."<span style='font-size:12px;color:red;'>
                        Το email που καταχωρήσατε υπάρχει ήδη
                      </span>";
			}
		}

		elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save']) && $_POST['save'] == 1) {

			$name 		= 		mysqli_real_escape_string($db, $_POST['name']);
			$email 		= 		mysqli_real_escape_string($db, $_POST['email']);
			$password   = 		mysqli_real_escape_string($db, $_POST['password']);
			$save 		= 		$_POST['save'];
			// $password   =        md5($password);
            echo $name;
			$sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password') ";

			$result = $db->query($sql);
			
			if($result) {
				echo "OK";
			}
			else {
				echo "ERROR";
            }
            
		}	
       
?>