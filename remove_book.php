<?php
	
	require 'decide_index.php';
	if(loggedin_admin()){
		$dept = "";
		$roll = $_SESSION['roll_admin'];
		if(isset($_POST['dept'])){
			$dept = strtolower($_POST['dept']);
			$flag=1;
			if(empty($dept)){
				echo "<script>alert('Fill in the type of product.');</script>";
				$flag=0;
				header('refresh: 0; url = admin.php');
			}
			if($flag==1){
				if($dept=='sports' || $dept=='cultural' || $dept=='technical' || $dept=='ece' || $dept=='ce' || $dept=='mme'){
						$_SESSION['dept'] = $dept;
						removebook();
				}
				else{
					echo "<script>alert('Invalid type.');</script>";
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