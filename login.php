<?php

	require 'decide_index.php';
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = md5($password);
		
		if(empty($username) || empty($password)){
			echo "<script>alert('You must supply both username and password');</script>";
			header('refresh: 0; url = index.php');
		}
		else{
			$query = "SELECT `roll` FROM `student` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password_hash)."'";
			if($query_run = mysql_query($query)){
				$query_num_rows = mysql_num_rows($query_run);
				if(!$query_num_rows){
					echo "<script>alert('Invalid username/password');</script>";
					header('refresh:0; url = index.php');
				}
				else if($query_num_rows==1){
				    $roll = mysql_result($query_run, 0, 'roll');
					if($roll == '2014ugcs500' && $username == 'admin' && $password == 'admin123')
						$_SESSION['roll_admin'] = $roll;
					else
						$_SESSION['roll'] = $roll;	
					header('Location: index.php');
				}
			}
		}
	}

?>