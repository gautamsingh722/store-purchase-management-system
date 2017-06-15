<?php 
	
	require 'core.php';
	require 'connect.php';
	function login_index(){?>
<html>
<?php include 'top-header.php'?>
<body>

<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="div_show();"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
      <li><a href="#" onclick="div_show7();"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>

<!--<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span>
		<span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="#" onclick="div_show7()">Admin Login</a></span>
		<span class="links"><a href="#" onclick="div_show();">Login</a></span></div>
  -->
 <div id="main">

<?php include 'content.php'?>
<!--<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div> -->

<div class="container">
<div class="button"><span><a href="search.php">*</a></span><a href="search.php">Advanced Product Search & Return</a></div>
</div>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="login.php" id="form" method="post" name="form">
<img id="close" src="cross.png" onclick ="div_hide()">
<h2>Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->


<div id="abc7">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="login.php" id="form" method="post" name="form7">
<img id="close" src="cross.png" onclick ="div_hide7()">
<h2>Admin Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->


</div>

<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

<script src="index.js"></script>
</body>
</html>
	<?php
	}
	
	function logout_index(){?>
		
		<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> My Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span>
		<span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="logout.php">Logout</a></span>
		<span class="links"><a href="profile.php">My Profile</a></span></div>
  -->
 <div id="main">
 <?php include 'content.php'?>

<div class="container">
<div class="button"><span><a href="search.php">*</a></span><a href="search.php">Advanced Product Search & Return</a></div>
</div>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="profile.php" id="form" method="post" name="form">
<img id="close" src="cross.png" onclick ="div_hide()">
<h2>Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->


<div id="abc7">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="index.php" id="form" method="post" name="form7">
<img id="close" src="cross.png" onclick ="div_hide7()">
<h2>Admin Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<br>
</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>



<script src="index.js"></script>
</body>
</html>
		
		<?php
	}
	
	function logout_index_admin(){?>
		<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span>
		<span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="logout.php">Logout</a></span>
		<span class="links"><a href="admin.php">My Profile (admin)</a></span></div>
  -->
 <div id="main">
  <?php include 'content.php'?>

<div class="container">
<div class="button"><span><a href="search.php">*</a></span><a href="search.php">Advanced Product Search & Return</a></div>
</div>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="profile.php" id="form" method="post" name="form">
<img id="close" src="cross.png" onclick ="div_hide()">
<h2>Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->


<div id="abc7">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="index.php" id="form" method="post" name="form7">
<img id="close" src="cross.png" onclick ="div_hide7()">
<h2>Admin Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<br>
</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

<script src="index.js"></script>
</body>
</html>
		<?php
	}
	
	
	function admin_loggedin(){?>
		
<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="admin.php">My Profile (admin)</a></span><span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">
<div class="container-fluid">
<div class="row">
	<div class="col-md-4">
		<span class="container">
<div class="button"><span><a href="register.php">*</a></span><a href="register.php">Add Member</a></div>
</span>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
<span class="container">
<div class="button"><span><a href="#" onclick="div_show3()">*</a></span><a href="#" onclick="div_show3()">Remove Member</a></div>
</span>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<span class="container">
<div class="button"><span><a href="#" onclick="div_show4()">*</a></span><a href="#" onclick="div_show4()">Add Product</a></div>
</span>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<span class="container">
<div class="button"><span><a href="#" onclick="div_show5()">*</a></span><a href="#" onclick="div_show5()">Remove Product</a></div>
</span>

&nbsp; &nbsp; 
<span class="container">
<div class="button"><span><a href="#" onclick="div_show7()">*</a></span><a href="#" onclick="div_show7()">View Member</a></div>
</span>
	</div>
	<div class="col-md-8">
		<?php 
	
	$roll = $_SESSION['roll_admin'];
	$query_run = mysql_query("SELECT `stname` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Name: '.$_SESSION['stname'] = mysql_result($query_run,0,'stname').'<br><br>';
	echo 'Name: Admin'.'<br><br>';
	$query_run = mysql_query("SELECT `dob` FROM `student` WHERE `roll` = '$roll'");
	//echo 'D.O.B: '.$_SESSION['dob'] = mysql_result($query_run,0,'dob').'<br><br>';
	echo 'D.O.B: 16-04-1996'.'<br><br>';
	$query_run = mysql_query("SELECT `branch` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Branch: '.$_SESSION['branch'] = mysql_result($query_run,0,'branch').'<br><br>';
	echo 'Branch: cse'.'<br><br>';
	$query_run = mysql_query("SELECT `email` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Email: '.$_SESSION['email'] = mysql_result($query_run,0,'email').'<br><br>';
	echo 'Email: gautamsingh722@gmail.com'.'<br><br>';
	$query_run = mysql_query("SELECT `mobile` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Mobile: '.$_SESSION['mobile'] = mysql_result($query_run,0,'mobile').'<br><br>';
	echo 'Mobile: 9693190466'.'<br><br>';
	$query_run = mysql_query("SELECT `batch` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Batch: '.$_SESSION['batch'] = mysql_result($query_run,0,'batch').'<br><br>';
	echo 'Batch: 2015'.'<br><br>';
	$query_run = mysql_query("SELECT `username` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Username: '.$_SESSION['username'] = mysql_result($query_run,0,'username').'<br><br>';
	echo 'Username: admin'.'<br><br>';
	$query_run = mysql_query("SELECT `address` FROM `student` WHERE `roll` = '$roll'");
	//echo 'Address: '.$_SESSION['address'] = mysql_result($query_run,0,'address').'<br><br>';
	echo 'Address: Hostel-C,Room-1012'.'<br><br>';
	$query_run = mysql_query("SELECT `issued` FROM `student` WHERE `roll` = '$roll'");
	
	$roll = 'uploads/'.$roll.'.jpg';
	
?>
	<span id = "topbooksimg2">
	<!--<img src = "<?php// echo $roll ?>">-->
	<img class="img-responsive" src="img/mine.jpg" height="520px" width="200px">
</span>

	</div>
</div>
</div>







<div id="abc3">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="remove_member.php" id="form" method="post" name="form3">
<img id="close" src="cross.png" onclick ="div_hide3()">
<h2>Remove Member</h2>
<hr>
Roll Number of Member: <input type="text" name="roll" placeholder="example: 2014ugcs032" class="input"></input><br><br>
Your Password: <input type="password" name="password" placeholder="Password" class="input"></input><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<div id="abc4">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="add_book.php" id="form" method="post" name="form4">
<img id="close" src="cross.png" onclick ="div_hide4()">
<h2>Add Product</h2>
<hr>
Product Name: <input type="text" name="name" placeholder="Product Name" class="input"></input><br><br>
Product Type: <input type="text" name="dept" placeholder="example: sports" class="input"></input><br><br>
Number of Products: <input type="number" name="num" placeholder="example: 10" class="input"></input><br><br>
Late Fine per day: <input type="number" name="fine" placeholder="example: 10" class="input"></input><br><br>
Your Password: <input type="password" name="password" placeholder="Password" class="input"></input><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<div id="abc5">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="remove_book.php" id="form" method="post" name="form5">
<img id="close" src="cross.png" onclick ="div_hide5()">
<h2>Remove Product</h2>
<hr>
Product Type: <input type="text" name="dept" placeholder="example: sports" class="input"></input><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<div id="abc6">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="renew.php" id="form" method="post" name="form6">
<img id="close" src="cross.png" onclick ="div_hide6()">
<h2>Renew Membership</h2>
<hr>
Roll Number: <input type="text" name="roll" placeholder="example: 2014ugcs032" class="input"></input><br><br>
Mobile: <input type="tel" name="mobile" placeholder="example: 9876543210" class="input"></input><br><br>
Address: <textarea name="address" placeholder="Address" class="input"></textarea><br><br>
Student Password: <input type="password" name="password" placeholder="Password" class="input"></input><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<div id="abc7">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="view.php" id="form" method="post" name="form7">
<img id="close" src="cross.png" onclick ="div_hide7()">
<h2>View Member</h2>
<hr>
Roll: <input type="text" name="roll" placeholder="example: 2014ugcs032" class="input"></input><br><br>
Your Password: <input type="password" name="password" placeholder="Password" class="input"></input><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>
</body>
<script src="index.js"></script>
</html>
			
		<?php
	}
	
	function profile_loggedin(){ ?>
		
<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> My Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="profile.php">My Profile</a></span><span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">

<span class="container">
<div class="button"><span><a href="#" onclick="div_show()">*</a></span><a href="#" onclick="div_show()">Edit Profile</a></div>
</span>
&nbsp; &nbsp; &nbsp; &nbsp;
<span class="container">
<div class="button"><span><a href="#" onclick="div_show2()">*</a></span><a href="#" onclick="div_show2()">Change Password</a></div>
</span>

<br>
<?php 
	
	$roll = $_SESSION['roll'];
	$query_run = mysql_query("SELECT `stname` FROM `student` WHERE `roll` = '$roll'");
	echo 'Name: '.$_SESSION['stname'] = mysql_result($query_run,0,'stname').'<br><br>';
	$query_run = mysql_query("SELECT `dob` FROM `student` WHERE `roll` = '$roll'");
	echo 'D.O.B: '.$_SESSION['dob'] = mysql_result($query_run,0,'dob').'<br><br>';
	$query_run = mysql_query("SELECT `branch` FROM `student` WHERE `roll` = '$roll'");
	echo 'Branch: '.$_SESSION['branch'] = mysql_result($query_run,0,'branch').'<br><br>';
	$query_run = mysql_query("SELECT `email` FROM `student` WHERE `roll` = '$roll'");
	echo 'Email: '.$_SESSION['email'] = mysql_result($query_run,0,'email').'<br><br>';
	$query_run = mysql_query("SELECT `mobile` FROM `student` WHERE `roll` = '$roll'");
	echo 'Mobile: '.$_SESSION['mobile'] = mysql_result($query_run,0,'mobile').'<br><br>';
	$query_run = mysql_query("SELECT `batch` FROM `student` WHERE `roll` = '$roll'");
	echo 'Batch: '.$_SESSION['batch'] = mysql_result($query_run,0,'batch').'<br><br>';
	$query_run = mysql_query("SELECT `username` FROM `student` WHERE `roll` = '$roll'");
	echo 'Username: '.$_SESSION['username'] = mysql_result($query_run,0,'username').'<br><br>';
	$query_run = mysql_query("SELECT `address` FROM `student` WHERE `roll` = '$roll'");
	echo 'Address: '.$_SESSION['address'] = mysql_result($query_run,0,'address').'<br><br>';
	$query_run = mysql_query("SELECT `issued` FROM `student` WHERE `roll` = '$roll'");
	echo 'Products Issued: '.$_SESSION['issued'] = mysql_result($query_run,0,'issued').'<br><br>';
	$query_run = mysql_query("SELECT `requested` FROM `student` WHERE `roll` = '$roll'");
	echo 'Products Requested Recently: '.$_SESSION['requested'] = mysql_result($query_run,0,'requested').'<br><br>';
	if($_SESSION['requested'] == 1){
		$query_run = mysql_query("SELECT `book1` FROM `book_request` WHERE `roll` = '$roll'");
		echo 'Book 1: '.$_SESSION['book1'] = mysql_result($query_run,0,'book1').'<br><br>';
	}
	else if($_SESSION['requested'] == 2){
		$query_run = mysql_query("SELECT `book1` FROM `book_request` WHERE `roll` = '$roll'");
		echo 'Book 1: '.$_SESSION['book1'] = mysql_result($query_run,0,'book1').'<br><br>';
		$query_run = mysql_query("SELECT `book2` FROM `book_request` WHERE `roll` = '$roll'");
		echo 'Book 2: '.$_SESSION['book2'] = mysql_result($query_run,0,'book2').'<br><br>';
	}
	$query_run = mysql_query("SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'");
	echo 'Total Late Fine: '.$_SESSION['late_fine'] = mysql_result($query_run,0,'late_fine').'<br><br>';
	
	$roll = 'uploads/'.$roll.'.jpg';
?>


<span id = "topbooksimg2">
<img src = "<?php echo $roll ?>">
</span>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="edit_profile.php" id="form" method="post" name="form">
<img id="close" src="cross.png" onclick ="div_hide()">
<h2>Edit Profile</h2>
<hr>
Name: <input type="text" name="stname" placeholder="Full Name" class="input"></input><br><br>
Username: <input type="text" name="username" placeholder="Username" class="input"></input><br><br>
Password: <input type="password" name="password" placeholder="Password" class="input"></input><br><br>
Confirm Password: <input type="password" name="conpassword" placeholder="Password" class="input"></input><br><br>
Email: <input type="email" name="email" placeholder="Email" class="input"></input><br><br>
D.O.B.: <input type="date" name="dob" class="input"></input><br><br>
Mobile: <input type="tel" name="mobile" placeholder="example: 9876543210" class="input"></input><br><br>
Address: <textarea name="address" placeholder="Address" class="input"></textarea><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<div id="abc2">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="change_password.php" id="form" method="post" name="form2">
<img id="close" src="cross.png" onclick ="div_hide2()">
<h2>Change Password</h2>
<hr>
Old Password: <input type="password" name="oldpassword" placeholder="Password" class="input"></input><br><br>
New Password: <input type="password" name="newpassword" placeholder="Password" class="input"></input><br><br>
Confirm Password: <input type="password" name="conpassword" placeholder="Password" class="input"></input><br><br>
<input type="submit" name="submit" id="submit"></input><br><br>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>
</body>
<script src="index.js"></script>
</html>
		
		<?php
	}
	
	function topbooks_login(){ ?>
		
		<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
 <!-- <a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="div_show2();"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
      <li><a href="#" onclick="div_show();"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="#" onclick="div_show()">Admin Login</a></span>
		<span class="links"><a href="#" onclick="div_show2()">Login</a></span></div>
-->
<style>
.modal-dialog {width:300px;}
.thumbnail {margin-bottom:6px;
height:200px;}
</style>
<div id="main">
	
	<div class="row">
	<div class="col-md-4">
	<h3>The Top Products are: </h3><br><br>
	<!--<span id = "topbooksimg">
		<img src="cs1.png"> &nbsp; &nbsp; &nbsp; <img src="me1.png"> &nbsp; &nbsp; &nbsp; <img src="eee1.png"> <br><br> <img src="ece1.png"> 
	&nbsp; &nbsp; &nbsp; <img src="ce1.png"> &nbsp; &nbsp; &nbsp; <img src="mme1.png">
	</span> -->
	1. Nivia Volleyball <br><br><br>
	2. Nivia Basketball <br><br><br>
	3. Automated Robots <br><br><br>
	4. Music System <br><br><br>
	5. English Willow Bat <br><br><br>
	6. Multimedia Speakers <br><br><br>
	7. Projectors <br><br><br>
	8. Carpets and Designary Clothes <br><br><br>
	9. Yonex Rackets and Shuttles <br><br><br>
	10. Measurement Tapes <br><br><br>
	</div>
	<div class="col-md-8">
  <div class="row">
   
      <div class="col-md-4"><a title="Basketball" href="#"><img class="thumbnail img-responsive" src="img/a1.jpg"></a></div>
      <div class="col-md-4"><a title="Robots" href="#"><img class="thumbnail img-responsive" src="img/a2.jpg"></a></div>
      <div class="col-md-4"><a title="Cricket Bat" href="#"><img class="thumbnail img-responsive" src="img/a3.jpg"></a></div>
    </div>
	<div class="row">
	  <div class="col-md-4"><a title="Projectors" href="#"><img class="thumbnail img-responsive" src="img/a4.jpg"></a></div>
      <div class="col-md-4"><a title="Music System" href="#"><img class="thumbnail img-responsive" src="img/a5.jpg"></a></div>
      <div class="col-md-4"><a title="Volleyball" href="#"><img class="thumbnail img-responsive" src="img/a6.jpg"></a></div>
     </div>
	 <div class="row">
	  <div class="col-md-4"><a title="Measurement tape" href="#"><img class="thumbnail img-responsive" src="img/a7.jpg"></a></div>
      <div class="col-md-4"><a title="Rackets" href="#"><img class="thumbnail img-responsive" src="img/a8.jpg"></a></div>
      <div class="col-md-4"><a title="Halogen light" href="#"><img class="thumbnail img-responsive" src="img/a9.jpg"></a></div>
      
	</div>


<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>


	
	
	</div>
	
<script>
$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});
</script>
	
	<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="login.php" id="form" method="post" name="form">
<img id="close" src="cross.png" onclick ="div_hide()">
<h2>Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->


<div id="abc2">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="login.php" id="form" method="post" name="form2">
<img id="close" src="cross.png" onclick ="div_hide2()">
<h2>Admin Login</h2>
<hr>
Username: <input id="username" name="username" placeholder="Username" type="text" class="input">
Password: <input id="password" name="password" placeholder="Password" type="password" class="input">
<input type="submit" id="submit">
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
</div>

</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

</body>
</html>
		
		<?php
	}
		
	function topbooks_logout(){ ?>
		
<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> My Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="profile.php">My Profile</a></span>
		<span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">
	
	<span id= "bookstop">
	<h3>The Top Products (based on most number of products issued) are: </h3><br><br>
	<p>
		
	</p>
	</span>
	
	<span id = "topbooksimg">
		<img src="cs1.png"> &nbsp; &nbsp; &nbsp; <img src="me1.png"> &nbsp; &nbsp; &nbsp; <img src="eee1.png"> <br><br> <img src="ece1.png"> 
	&nbsp; &nbsp; &nbsp; <img src="ce1.png"> &nbsp; &nbsp; &nbsp; <img src="mme1.png">
	</span>
	
</div>

<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

</body>
</html>
		
		<?php
	}	
	
	function topbooks_admin_logout(){?>
		
<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="admin.php">My Profile (admin)</a></span>
		<span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">
	
	<span id= "bookstop">
	<h3>The Top Products (based on most number of products issued) are: </h3><br><br>
	<p>
		
	</p>
	</span>
	
	<span id = "topbooksimg">
		<img src="cs1.png"> &nbsp; &nbsp; &nbsp; <img src="me1.png"> &nbsp; &nbsp; &nbsp; <img src="eee1.png"> <br><br> <img src="ece1.png"> 
	&nbsp; &nbsp; &nbsp; <img src="ce1.png"> &nbsp; &nbsp; &nbsp; <img src="mme1.png">
	</span>
	
</div>

<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

</body>
</html>
		
		<?php
	}
	
	function search_loggedin(){?>
<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> My Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="profile.php">My Profile</a></span><span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">
	

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="container">
<div class="button"><span><a href="searchbook.php">*</a></span><a href="searchbook.php">Search Products</a></div>
</span>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="container">
<span class="button"><span><a href="returnbook.php">*</a></span><a href="returnbook.php">Return Products</a></span>
</span>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="container">
<span class="button"><span><a href="#" onclick="div_show()">*</a></span><a href="#" onclick="div_show()">Request Products</a></span>
</span>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="request.php" id="form" method="post" name="form">
<img id="close" src="cross.png" onclick ="div_hide()">
<h2>Product Request</h2>
<hr>
<div id="syb">&nbsp; Request Your Product:</div><br>
<input type="text" name="book" placeholder="Name of the product.." class="search"></input><br><br> 
<input type="submit" name="submit" id="submit" value="Request"></input>
<br><br>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

</body>
<script src="index.js"></script>
</html>
	<?php
	}
	
	function removebook(){?>
		<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="admin.php">My Profile (admin)</a></span>
		<span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">
	
	<span id= "bookstop">
	<h3>Select the product you want to REMOVE: </h3><br>
	
		<?php 
			
			$dept = $_SESSION['dept'];
			$query = "SELECT `book_id`,`book_name` FROM `book` WHERE `book_dept`='$dept'";
			if($query_run = mysql_query($query)){
				$num_rows = mysql_num_rows($query_run);
				if($num_rows==0){
					echo 'There are no products of this type.';
				}
				else{
					echo 'Product Id'.'&nbsp; &nbsp; &nbsp;'.'Product Name'.'<br><br>';
					?>
					
				<span id = "topbooksimg">
				<img src="cs1.png"> &nbsp; &nbsp; &nbsp; <img src="me1.png"> &nbsp; &nbsp; &nbsp; <img src="eee1.png"> <br><br> <img src="ece1.png"> 
				&nbsp; &nbsp; &nbsp; <img src="ce1.png"> &nbsp; &nbsp; &nbsp; <img src="mme1.png">
				</span>
				
					<?php
					while($row = mysql_fetch_assoc($query_run)){
						echo $row['book_id'].'&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;'.$row['book_name'].'<br>';
					}
					echo '<br>Select the id of the product to remove:<br><br>';
					?>
					
					<form action="removed.php" method = "POST">
						Product Id: &nbsp; <input type="number" name="id" placeholder="e.g: 2" />
						<br><br>
						<input type="submit" name="submit" value="Remove" />
					</form>
					
					<?php
				}
			}
			else{
				echo "<script>alert('Product cannot be removed now, please try again later.');</script>";
				header('refresh: 0; url = admin.php');
			}
			
		?>
		
	</span>
	
	
</div>

<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>

</body>
</html>
	<?php
	}
	
	function view($roll){?>
		
<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!--<a href="membership.php">Membership</a>-->
  <a href="index.php#contact">Contact</a>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
		<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="books.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="topbooks.php">Sports</a></li>
          <li><a href="topbooks.php">Cultural</a></li>
          <li><a href="topbooks.php">Technical</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span>
		<span class="links"><a href="admin.php">My Profile (admin)</a></span><span class="links"><a href="logout.php">Logout</a></span></div>
-->
<div id="main">
<br>
<?php 
	
	$query_run = mysql_query("SELECT `stname` FROM `student` WHERE `roll` = '$roll'");
	echo 'Name: '.mysql_result($query_run,0,'stname').'<br><br>';
	$query_run = mysql_query("SELECT `dob` FROM `student` WHERE `roll` = '$roll'");
	echo 'D.O.B: '.mysql_result($query_run,0,'dob').'<br><br>';
	$query_run = mysql_query("SELECT `branch` FROM `student` WHERE `roll` = '$roll'");
	echo 'Branch: '.mysql_result($query_run,0,'branch').'<br><br>';
	$query_run = mysql_query("SELECT `email` FROM `student` WHERE `roll` = '$roll'");
	echo 'Email: '.mysql_result($query_run,0,'email').'<br><br>';
	$query_run = mysql_query("SELECT `mobile` FROM `student` WHERE `roll` = '$roll'");
	echo 'Mobile: '.mysql_result($query_run,0,'mobile').'<br><br>';
	$query_run = mysql_query("SELECT `batch` FROM `student` WHERE `roll` = '$roll'");
	echo 'Batch: '.mysql_result($query_run,0,'batch').'<br><br>';
	$query_run = mysql_query("SELECT `username` FROM `student` WHERE `roll` = '$roll'");
	echo 'Username: '.mysql_result($query_run,0,'username').'<br><br>';
	$query_run = mysql_query("SELECT `address` FROM `student` WHERE `roll` = '$roll'");
	echo 'Address: '.mysql_result($query_run,0,'address').'<br><br>';
	$query_run = mysql_query("SELECT `issued` FROM `student` WHERE `roll` = '$roll'");
	echo 'Products Issued: '.mysql_result($query_run,0,'issued').'<br><br>';
	$query_run = mysql_query("SELECT `requested` FROM `student` WHERE `roll` = '$roll'");
	echo 'Products Requested: '.$requested = mysql_result($query_run,0,'requested').'<br><br>';
	if($requested == 1){
		$query_run = mysql_query("SELECT `book1` FROM `book_request` WHERE `roll` = '$roll'");
		echo 'Product 1: '.mysql_result($query_run,0,'book1').'<br><br>';
	}
	else if($requested == 2){
		$query_run = mysql_query("SELECT `book1` FROM `book_request` WHERE `roll` = '$roll'");
		echo 'Product 1: '.mysql_result($query_run,0,'book1').'<br><br>';
		$query_run = mysql_query("SELECT `book2` FROM `book_request` WHERE `roll` = '$roll'");
		echo 'Product 2: '.mysql_result($query_run,0,'book2').'<br><br>';
	}
	$query_run = mysql_query("SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'");
	echo 'Total Late Fine: '.mysql_result($query_run,0,'late_fine').'<br><br>';
	
	$roll = 'uploads/'.$roll.'.jpg';
?>


<span id = "topbooksimg2">
<img src = "<?php echo $roll ?>">
</span>

</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>
</body>
<script src="index.js"></script>
</html>
		
		<?php
	}

	
	
?>