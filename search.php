<?php
	
	require 'decide_index.php';
	
	if(!loggedin()){
		echo "<script>alert('You should be logged in as a member first.');</script>";
		header("refresh:0; url = index.php");
	}
	else if(loggedin()){
		search_loggedin();
	}
	
?>
