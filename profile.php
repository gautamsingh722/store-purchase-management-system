<?php
	
	require 'decide_index.php';
	
	if(loggedin()){
		profile_loggedin();
	}
	else{
		echo "<script>alert('You should be logged in first.');</script>";
		header('refresh: 0; url = index.php');
	}
	
?>

