<html>
<?php include 'top-header.php'?>
<body>
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
<?php include 'header.php'?>
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
          <li><a href="top-sports.php">Sports</a></li>
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


<span id= "bookstop">
	<h3>The Top Products are: </h3><br><br>
	<span id = "topbooksimg">
		<img src="cs1.png"> &nbsp; &nbsp; &nbsp; <img src="me1.png"> &nbsp; &nbsp; &nbsp; <img src="eee1.png"> <br><br> <img src="ece1.png"> 
	&nbsp; &nbsp; &nbsp; <img src="ce1.png"> &nbsp; &nbsp; &nbsp; <img src="mme1.png">
	</span>
	1. Let Us C <br><br><br>
	2. Let Us Java <br><br><br>
	3. Automobile Engineering <br><br><br>
	4. Introduction to Algorithms by Cormen <br><br><br>
	5. Basic Electrical Engineering <br><br><br>
	6. Semiconductor Devices. <br><br><br>
	7. Basic Civil Engineering <br><br><br>
	8. Iron Making and Steel Making <br><br><br>
	9. Machine Systems <br><br><br>
	10. Microprocessor & Interfacing <br><br><br>
</span>
<?php include 'footer.php'?>
</body>
</html>
