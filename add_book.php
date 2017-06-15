<?php

	require 'decide_index.php';
	
	if(loggedin_admin()){
		$name = "";
		$dept = "";
		$num = "";
		$fine = "";
		$password = "";
		
		if(isset($_POST['password']) && isset($_POST['name']) && isset($_POST['dept']) && isset($_POST['num']) && isset($_POST['fine'])){
			$password = $_POST['password'];
			$name = $_POST['name'];
			$dept = $_POST['dept'];
			$num = $_POST['num'];
			$fine = $_POST['fine'];
			
			if($password != 'admin123'){
				echo "<script>alert('Wrong password.');</script>";
				$name = "";
				header('refresh: 0; url = admin.php');
			}
			
			$flag=1;
			
			if(empty($password) || empty($name) || empty($dept) || empty($num) || empty($fine)){
				echo "<script>alert('Fill in all fields');</script>";
				header("refresh: 0; url = admin.php");
			}
			else{
				$password_hash = md5(test_input($password));
				$name = test_input($name);
				$dept = strtolower(test_input($dept));
				$num = test_input($num);
				$fine = test_input($fine);
				
				$query = "INSERT INTO `book`(`book_name`,`book_dept`,`total`,`fine`) VALUES('$name','$dept','$num','$fine')";
				if($query_run = mysql_query($query)){
					echo "<script>alert('Product inserted successfully.');</script>";
					header("refresh: 0; url = admin.php");
				}
				else{
					echo "<script>alert('Product cannot be inserted at this time. Please try after sometime.');</script>";
					header("refresh: 0; url = admin.php");
				}
			}
		}
	}
	else{
		echo "<script>alert('You need to be logged in as admin.');</script>";
		header('refresh: 0; url = index.php');
	}
	
?>