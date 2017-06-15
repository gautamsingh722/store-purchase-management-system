<?php 
	
	require 'decide_index.php';
	
	if(loggedin_admin() || loggedin()){
		$oldpassword = "";
		$newpassword = "";
		$conpassword = "";
		
		if(isset($_POST['oldpassword']) && isset($_POST['newpassword']) && isset($_POST['conpassword'])){
			$oldpassword = $_POST['oldpassword'];
			$newpassword = $_POST['newpassword'];
			$conpassword = $_POST['conpassword'];
			
			if(empty($oldpassword) || empty($newpassword) || empty($conpassword)){
				echo "<script>alert('Fill in all fields');</script>";
				if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin']))
					header("refresh: 0; url = admin.php");
				else 
					header("refresh: 0; url = profile.php");
			}
			else{
				$oldpassword_hash = md5(test_input($oldpassword));
				$newpassword_hash = md5(test_input($newpassword));
				$conpassword_hash = md5(test_input($conpassword));
				
				if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin'])){
					$roll_admin = $_SESSION['roll_admin'];
					$query = "SELECT `password` FROM `student` WHERE `roll` = '$roll_admin'";
				}
				else{
					$roll = $_SESSION['roll'];
					$query = "SELECT `password` FROM `student` WHERE `roll` = '$roll'";
				}
				
				if($query_run = mysql_query($query)){
					$password = mysql_result($query_run,0,'password');
					if(($newpassword_hash != $conpassword_hash) || ($password != $oldpassword_hash)){
						echo "<script>alert('Passwords donot match or old password is wrong');</script>";
						if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin'])){
							header('refresh: 0; url = admin.php');
						}
						else{
							header('refresh: 0; url = profile.php');
						}
					}
				}
				
				if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin'])){
					$roll_admin = $_SESSION['roll_admin'];
					$query = "UPDATE `student` SET `password` = '$newpassword_hash' WHERE `roll` = '$roll_admin'";
				}
				else{
					$roll = $_SESSION['roll'];
					$query = "UPDATE `student` SET `password` = '$newpassword_hash' WHERE `roll` = '$roll'";
				}
				
				if($query_run = mysql_query($query)){
					echo "<script>alert('Your password has been updated successfully.');</script>";
					header("refresh:0; url = logout.php");
				}
				else{
					echo "<script>alert('Sorry! You cannot update passwords right now. Try again later');</script>";
				}
			}
		}
	}
	else{
		echo "<script>alert('You have to login first');</script>";
		header('refresh: 0; url = index.php');
	}

?>