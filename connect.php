<?php
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	
	$db = 'storenpurchase';
	
	if(mysql_connect($host,$user,$pass) && mysql_select_db($db)){
		
	}
	else{
		die(mysql_error());
	}

?>