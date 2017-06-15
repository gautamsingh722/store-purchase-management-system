<?php  

	require 'decide_index.php';
	
	if(loggedin_admin()){
		$roll = "";
		$password = "";
		if(isset($_POST['roll']) && isset($_POST['password'])){
			$roll = test_input($_POST['roll']);
			$password = test_input($_POST['password']);
			$password_hash = md5($password);
			if($password != 'admin123'){
				echo "<script>alert('Wrong password.');</script>";
				header('refresh: 0; url = admin.php');
			}
			else if($password == 'admin123'){
				$query = "SELECT `roll` FROM `student` WHERE `roll` = '$roll'";
				if($query_run = mysql_query($query)){
					$num_rows = mysql_num_rows($query_run);
					if($num_rows==0){
						echo "<script>alert('Student with this roll number does not exist.');</script>";
						header('refresh: 0; url = admin.php');
					}
					else if($num_rows==1){
						view($roll);
					}
				}
				else{
					echo "<script>alert('Student cannot be viewed at this time, please try again later.');</script>";
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