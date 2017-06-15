<?php 

	require 'decide_index.php';
	
	if(loggedin_admin()){
		$roll = "";
		$mobile = "";
		$address = "";
		$password = "";
		if(isset($_POST['roll']) && isset($_POST['mobile']) && isset($_POST['address']) && isset($_POST['password'])){
			$roll = test_input($_POST['roll']);
			$mobile = test_input($_POST['mobile']);
			$address = test_input($_POST['address']);
			$password = test_input($_POST['password']);
			$password_hash = md5($password);
			$query = "SELECT `password` FROM `student` WHERE `roll` = '$roll'";
			$query_run = mysql_query($query);
			$result = mysql_result($query_run,0,'password');
			if(empty($roll) || empty($mobile) || empty($address) || empty($password)){
				echo "<script>alert('Fill in all the details.');</script>";
				header('refresh: 0; url = admin.php');
			}
			else if($result!=$password_hash){
				echo "<script>alert('Wrong password.');</script>";
				header('refresh: 0; url = admin.php');
			}
			else{
				$query = "SELECT `roll` FROM `student` WHERE `roll` = '$roll'";
				if($query_run = mysql_query($query)){
					$num_rows = mysql_num_rows($query_run);
					if($num_rows==0){
						echo "<script>alert('Student does not exist.');</script>";
						header('refresh: 0; url = admin.php');
					}
					else if($num_rows==1){
						$query = "SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'late_fine');
						if($result==0){
							$query = "UPDATE `student` SET `mobile` = '$mobile', `address` = '$address' WHERE `roll` = '$roll'";
							if($query_run = mysql_query($query)){
								echo "<script>alert('Renewal completed successfully!');</script>";
								header('refresh: 0; url = admin.php');
							}
							else{
								echo "<script>alert('Renewal cannot be done at this time, please try again later.');</script>";
								header('refresh: 0; url = admin.php');
							}
						}
						else{
							echo "<script>alert('Account cannot be renewed, student has Rs. $result late fine!');</script>";
							header('refresh: 0; url = admin.php');
						}
					}
				}
				else{
					echo "<script>alert('Renewal cannot be done at this time, please try again later.');</script>";
					header('refresh: 0; url = admin.php');
				}
			}
		}
	}
	else{
		echo "<script>alert('You must be logged in as admin.');</script>";
		header('refresh: 0; url = index.php');
	}

?>