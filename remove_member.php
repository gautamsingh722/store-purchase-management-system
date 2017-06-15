<?php

	require 'decide_index.php';
	
	if(loggedin_admin()){
		$roll = "";
		$password = "";
		
		if(isset($_POST['password']) && isset($_POST['roll'])){
			$password = $_POST['password'];
			$roll = $_POST['roll'];
			
			if($password != 'admin123'){
				echo "<script>alert('Wrong password.');</script>";
				$roll = "";
				header('refresh: 0; url = admin.php');
			}
			
			$flag=1;
			
			if(empty($password) || empty($roll)){
				echo "<script>alert('Fill in all fields');</script>";
					header("refresh: 0; url = admin.php");
			}
			else{
				$password_hash = md5(test_input($password));
				$roll = test_input($roll);
				
				$query = "SELECT `stname` FROM `student` WHERE `roll` = '$roll'";
				if($query_run = mysql_query($query)){
					if(!mysql_num_rows($query_run)){
						echo "<script>alert('Student does not exist.');</script>";
						$flag=0;
						header('refresh: 0; url = admin.php');
					}
				}
				if($flag){
					$query = "DELETE FROM `student` WHERE `roll` = '$roll'";
					$query2 = "DELETE FROM `book_request` WHERE `roll` = '$roll'";
					$query3 = "DELETE FROM `book_issue` WHERE `roll` = '$roll'";
				
					if($query_run = mysql_query($query) && $query_run2 = mysql_query($query2) && $query_run3 = mysql_query($query3)){
						echo "<script>alert('Student removed successfully.');</script>";
						header('refresh: 0; url = admin.php');
					}
					else{
						echo "<script>alert('Student cannot be removed right now. Please try again later');</script>";
						header('refresh: 0; url = admin.php');
					}
				}
			}
		}
	}
	else{
		echo "<script>alert('You need to be logged in as admin.');</script>";
		header('refresh: 0; url = index.php');
	}
	
?>