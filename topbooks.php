<?php
	
	require 'decide_index.php';
	
	if(loggedin_admin()){
		topbooks_admin_logout();
	}
	else if(loggedin()){
		topbooks_logout();
	}
	else{
		topbooks_login();
	}
	
?>

