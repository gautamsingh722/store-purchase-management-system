<?php
	
	require 'decide_index.php';
	
	if(loggedin_admin()){
		admin_loggedin();
	}
	else{
		echo "<script>alert('You should be logged in as admin.');</script>";
		header('refresh: 0; url = index.php');
	}
	
?>

