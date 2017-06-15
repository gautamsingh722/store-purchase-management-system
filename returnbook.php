<?php 
	require 'decide_index.php';
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
	<div id="syb">&nbsp; Return Your Product:</div><br><br>
	<?php 
		$roll = $_SESSION['roll'];
		$query = "SELECT `issued` FROM `student` WHERE `roll` = '$roll'";
		$query_run = mysql_query($query);
		$issued = mysql_result($query_run,0,'issued');
		$_SESSION['issued'] = $issued;
		if($issued==0){
			echo "<script>alert('You have not issued any product yet.');</script>";
			header('refresh: 0; url = search.php');
		}
		else if($issued==1){
			$_SESSION['id1'] = "";
			$_SESSION['id2'] = "";
			$query = "SELECT `book1` FROM `book_issue` WHERE `roll` = '$roll'";
			$query_run = mysql_query($query);
			$result = mysql_result($query_run,0,'book1');
			if($result!=0){
				$id = $result;
				$_SESSION['id1'] = $id;
				echo '&nbsp; &nbsp; &nbsp; Product Id'.'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.'Product Name'.'<br><br>';
				$query = "SELECT `book_name` FROM `book` WHERE `book_id` = '$id'";
				$query_run = mysql_query($query);
				$book = mysql_result($query_run,0,'book_name');
				echo '&nbsp; &nbsp; &nbsp;'.$id.'&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.$book.'<br><br>';
			}
			else{
				$query = "SELECT `book2` FROM `book_issue` WHERE `roll` = '$roll'";
				$query_run = mysql_query($query);
				$result = mysql_result($query_run,0,'book2');
				$id = $result;
				$_SESSION['id2'] = $id;
				echo '&nbsp; &nbsp; &nbsp; Product Id'.'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.'Product Name'.'<br><br>';
				$query = "SELECT `book_name` FROM `book` WHERE `book_id` = '$id'";
				$query_run = mysql_query($query);
				$book = mysql_result($query_run,0,'book_name');
				echo '&nbsp; &nbsp; &nbsp;'.$id.'&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.$book.'<br><br>';
			}
			?>
			
			<form action = "return.php" method = "POST">
				<input type = "submit" name="submit" value="Return" />
			</form>
			
			<?php
		}
		else if($issued==2){
			$_SESSION['id1'] = "";
			$_SESSION['id2'] = "";
			$query1 = "SELECT `book1` FROM `book_issue` WHERE `roll` = '$roll'";
			$query2 = "SELECT `book2` FROM `book_issue` WHERE `roll` = '$roll'";
			$query1_run = mysql_query($query1);
			$query2_run = mysql_query($query2);
			$id1 = mysql_result($query1_run,0,'book1');
			$id2 = mysql_result($query2_run,0,'book2');
			$_SESSION['id1'] = $id1;
			$_SESSION['id2'] = $id2;
			echo '&nbsp; &nbsp; &nbsp; Product Id'.'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.'Product Name'.'<br><br>';
			$query1 = "SELECT `book_name` FROM `book` WHERE `book_id` = '$id1'";
			$query2 = "SELECT `book_name` FROM `book` WHERE `book_id` = '$id2'";
			$query1_run = mysql_query($query1);
			$query2_run = mysql_query($query2);
			$name1 = mysql_result($query1_run,0,'book_name');
			$name2 = mysql_result($query2_run,0,'book_name');
			echo '&nbsp; &nbsp; &nbsp;'.$id1.'&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.$name1.'<br><br>';
			echo '&nbsp; &nbsp; &nbsp;'.$id2.'&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.$name2.'<br><br>';
			echo 'Enter the Product Id to return:'.'<br><br>';
			
			?>
			
			<form action="return.php" method="POST">
				Product Id: &nbsp; <input type="number" name="id" placeholder="e.g: 2" /><br><br>
				<input type="submit" name="submit" value="Return" />
			</form>
			
			<?php
		}
	?> 
	
</div>
<?php include 'footer.php'?>
</body>
</html>