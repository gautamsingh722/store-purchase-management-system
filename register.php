<?php
	
	require 'decide_index.php';
	
	if(loggedin_admin()){
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
	$image1= false;
	
	if(isset($_POST['stname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['conpassword']) && isset($_POST['email']) &&
		isset($_POST['roll']) && isset($_POST['dob']) && isset($_POST['branch']) && isset($_POST['batch']) && isset($_POST['mobile']) &&
		isset($_POST['address']) && isset($_POST['submit'])){

		$stname = $_POST['stname']; $username = $_POST['username']; $password = $_POST['password']; $conpassword = $_POST['conpassword'];
		$email = $_POST['email']; $roll = $_POST['roll']; $dob = $_POST['dob']; $branch = $_POST['branch']; $batch = $_POST['batch'];
		$mobile = $_POST['mobile']; $address = $_POST['address']; $image1 = @getimagesize($_FILES['file']['tmp_name']);
		$password_hash = md5($password);
		
		if(empty($stname) || empty($username) || empty($password) || empty($conpassword) || empty($email) || empty($roll) || empty($dob) || 
		empty($branch) || empty($batch) || empty($mobile) || empty($address) || !$image1){
			echo "<script>alert('Fill in all fields and upload image');</script>";
			header("refresh: 3; url = register.php");
		}
		else{
			$stname = test_input($stname); $username = test_input($username); $password = test_input($password); $conpassword = test_input($conpassword);
			$email = test_input($email); $roll = test_input($roll); $dob = test_input($dob); $branch = strtolower(test_input($branch));
			$batch = test_input($batch); $mobile = test_input($mobile); $address = test_input($address);
			$issued = 0;
			$requested = 0;
			$fine = 0;
			
			$max_width = 1024*50;
			
			//$image = addslashes($_FILES['image']['tmp_name']);
			//$name = addslashes($_FILES['image']['name']);
			//$image = file_get_contents($image);
			//$image = base64_encode($image);
			
			$query = "SELECT `username` FROM `student` WHERE `username`='".mysql_real_escape_string($username)."'";
			if($query_run = mysql_query($query)){
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows>=1){
					echo "<script>alert('This username already exists');</script>";
				}
			}
			
			$query = "SELECT `roll` FROM `student` WHERE `username`='".mysql_real_escape_string($roll)."'";
			if($query_run = mysql_query($query)){
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows>=1){
					echo "<script>alert('This roll number already exists');</script>";
					header('refresh: 0; url = register.php');
				}
			}
			
			$flag = 1;
			
			if($password != $conpassword){
				$flag=0;
				echo "<script>alert('Passwords donot match');</script>";
				header('refresh: 0; url = register.php');
			}
			
			if (!preg_match("/^[a-zA-Z ]*$/",$stname)) {
				$flag=0;
				echo "<script>alert('Only letters and spaces allowed in Name');</script>";
				header('refresh: 0; url = register.php');
			}
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$flag=0;
				 echo "<script>alert('Invalid email format');</script>";
				 header('refresh: 0; url = register.php');
			}
			
			if($_FILES['file']['size'] > $max_width){	
				$flag=0;
				echo "<script>alert('Please upload image of size less than 50kb.');</script>";
				header('refresh: 0; url = register.php');
			}
			
			if($flag){
			$query = "INSERT INTO `student` VALUES('$roll','$stname','$dob','$branch','$email','$mobile','$batch','$username','$password_hash',
						'$address','$issued','$requested','$fine')";
			$query2 = "INSERT INTO `book_request`(`roll`,`total`) VALUES('$roll','$issued')";
			$query3 = "INSERT INTO `book_issue`(`roll`) VALUES('$roll')";
			
			$name = $roll;
			$size = $_FILES['file']['size'];
			$type = $_FILES['file']['type'];
			
			$tmp_name = $_FILES['file']['tmp_name'];
			$location = 'uploads/';
			
			if(move_uploaded_file($tmp_name, $location.$name.'.jpg')){
				
			}
			else{
				die(mysql_error());
			}
			
			if($query_run = mysql_query($query) && $query_run2 = mysql_query($query2) && $query_run3 = mysql_query($query3)){
				echo "<script>alert('You have been successfully registered.');</script>";
				header("refresh:0; url = index.php");
			}
			else{
				echo "<script>alert('Sorry! You cannot register right now. Try after Some time');</script>";
			}
			}
		}
	}
	
?>

<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <a href="membership.php">Membership</a>
  <a href="index.php#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
			<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="books.php">Products</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="topbooks.php">Sports items</a></li>
            <li><a href="topbooks.php">Cultural items</a></li>
            <li><a href="topbooks.php">Technical items</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span><span class="links">
		<a href="admin.php">My Profile (admin)
		</a></span><span class="links"><a href="logout.php">Logout</a></span></div>
-->
<style>
hdg{
	margin-bottom: 0px;
	margin-top: 0px;
}
</style>
<div id="main">
<center>	
<form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="post" id="form" enctype="multipart/form-data">
<h3 id="hdg">Name:</h3> <input type="text" name="stname" placeholder="Full Name" class="input" value="<?php echo $stname;?>"></input>
<h3 id="hdg">Username:</h3> <input type="text" name="username" placeholder="Username" class="input" value="<?php echo $username;?>"></input>
<h3 id="hdg">Password:</h3> <input type="password" name="password" placeholder="Password" class="input"></input>
<h3 id="hdg">Confirm Password:</h3> <input type="password" name="conpassword" placeholder="Password" class="input"></input><br><br>
<h3 id="hdg">Email:</h3> <input type="email" name="email" placeholder="Email" class="input" value="<?php echo $email;?>"></input>
<h3 id="hdg">Roll:</h3> <input type="text" name="roll" placeholder="example: 2014ugcs032" class="input" value="<?php echo $roll;?>"></input>
<h3 id="hdg">D.O.B.:</h3> <input type="date" name="dob" class="input"></input>
<h3 id="hdg">Branch:</h3> <input type="text" name="branch" placeholder="example: CSE or cse" class="input" value="<?php echo $branch;?>"></input>
<h3 id="hdg">Batch:</h3> <input type="text" name="batch" placeholder="example: 2014" class="input" value="<?php echo $batch;?>"></input>
<h3 id="hdg">Mobile:</h3> <input type="tel" name="mobile" placeholder="example: 9876543210" class="input" value="<?php echo $mobile;?>"></input>
<h3 id="hdg">Address:</h3> <textarea name="address" placeholder="Address" class="input" value="<?php echo $address;?>"></textarea>
<input type="file" name="file"></input><br><br>Upload Image<br><br>
<input type="submit" name="submit" id="submit"></input>
</form>		
</center>
</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>



</body>
<script src="index.js"></script>
</html>

<?php

	}
	else{
		echo "<script>alert('You need to be logged in as admin.')</script>";
		header('refresh: 0; url = index.php');
	}

?>