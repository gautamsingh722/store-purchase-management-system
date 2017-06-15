<?php
	
	ob_start();
	session_start();
	$current_file = $_SERVER['SCRIPT_FILENAME'];
	
	function loggedin_admin(){
		if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin'])){
			return true;
		}
		else{
			return false;
		}
	}
	
	function loggedin(){
		if(isset($_SESSION['roll']) && !empty($_SESSION['roll'])){
			return true;
		}
		else{
			return false;
		}
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>