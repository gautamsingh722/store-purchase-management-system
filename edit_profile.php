<?php 

	require 'decide_index.php';
	
if(loggedin_admin() || loggedin()){
	$stname = "";
	$username = "";
	$password = "";
	$conpassword = "";
	$email = "";
	$roll = "";
	$dob = "";
	$branch = "";
	$batch = "";
	$mobile = "";
	$address = "";
	
	if(isset($_POST['stname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['conpassword']) && isset($_POST['email']) &&
		isset($_POST['dob']) &&  isset($_POST['mobile']) && isset($_POST['address']) && isset($_POST['submit'])){
		
		$stname = $_POST['stname']; $username = $_POST['username']; $password = $_POST['password']; $conpassword = $_POST['conpassword'];
		$email = $_POST['email']; $dob = $_POST['dob']; 
		$mobile = $_POST['mobile']; $address = $_POST['address']; 
		$password_hash = md5($password);
		
		
		if(empty($stname) || empty($username) || empty($password) || empty($conpassword) || empty($email) || empty($dob) || 
	    empty($mobile) || empty($address)){
			echo "<script>alert('Fill in all fields');</script>";
			if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin']))
				header("refresh: 0; url = admin.php");
			else 
				header("refresh: 0; url = profile.php");
		}
		else{
			$stname = test_input($stname); $username = test_input($username); $password = test_input($password); $conpassword = test_input($conpassword);
			$email = test_input($email); $dob = test_input($dob);
			$mobile = test_input($mobile); $address = test_input($address);
			$issued = 0;
			$requested = 0;
			$fine = 0;
			
			//$image = addslashes($_FILES['image']['tmp_name']);
			//$name = addslashes($_FILES['image']['name']);
			//$image = file_get_contents($image);
			//$image = base64_encode($image);
			
			
			if($password != $conpassword){
				echo "<script>alert('Passwords donot match');</script>";
			}
			
			if (!preg_match("/^[a-zA-Z ]*$/",$stname)) {
				echo "<script>alert('Only letters and spaces allowed in Name');</script>";
			}
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 echo "<script>alert('Invalid email format');</script>";
			}
			
			if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin'])){
				$roll_admin = $_SESSION['roll_admin'];
				$query = "UPDATE `student` SET `stname` = '$stname', `username` = '$username', `password` = '$password_hash', `email` = '$email',
						`dob` = '$dob', `mobile` = '$mobile', `address` = '$address' WHERE `roll` = '$roll_admin'";
			}
			else{
				$roll = $_SESSION['roll'];
				$query = "UPDATE `student` SET `stname` = '$stname', `username` = '$username', `password` = '$password_hash', `email` = '$email',
						`dob` = '$dob', `mobile` = '$mobile', `address` = '$address' WHERE `roll` = '$roll'";
			}
			
			if($query_run = mysql_query($query)){
				echo "<script>alert('Your details have been updated successfully.');</script>";
				if(isset($_SESSION['roll_admin']) && !empty($_SESSION['roll_admin']))
					header("refresh:0; url = admin.php");
				else
					header("refresh:0; url = profile.php");
			}
			else{
				echo "<script>alert('Sorry! You cannot update details right now. Try after Some time');</script>";
			}
		}
	}
}
else{
	echo "<script>alert('You have to login first');</script>";
	header('refresh: 0; url = index.php');
}

?>