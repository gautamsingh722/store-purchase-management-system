<?php
	
	require 'decide_index.php';
	
	if(loggedin()){
		logout_index();
	}
	else if(loggedin_admin()){
		logout_index_admin();
	}
	else{
		login_index();
	}
	
?>

<style>
a{
	text-decoration:none!important;
}
</style>


