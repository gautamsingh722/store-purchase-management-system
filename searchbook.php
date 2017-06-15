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

	<div id="syb">&nbsp; Search Your Product:</div><br>
	<form action="searchbook.php" method="POST">
	<input type="text" name="search1" placeholder="Name of the product.." class="search"></input><br><br> &nbsp;
	<input type="submit" name="submit1" value="Search"></input>
	</form>
	
	<div id="syb">&nbsp; Search Product by Type:</div><br>
	<form action="searchbook.php" method="POST">
	<input type="text" name="search2" placeholder="Type.. e.g: sports" class="search"></input><br><br> &nbsp;
	<input type="submit" name="submit2" value="Search"></input>
	</form>
	<br><br>
	<?php  
		$_SESSION['book'] = "";
		$_SESSION['dept'] = "";
		if(isset($_POST['search1']) && isset($_POST['submit1']) && !empty($_POST['search1']) && !empty($_POST['submit1'])){
			$book = strtolower(test_input($_POST['search1']));
			$_SESSION['book'] = $book;
			$query = "SELECT `book_id`, `book_name`, `book_dept`, `total`, `fine` FROM `book` WHERE `book_name` LIKE '%$book%'";
			if($query_run = mysql_query($query)){
				$num_rows = mysql_num_rows($query_run);
				if($num_rows==0){
					echo "<script>alert('No product matches the given name, please try again.');</script>";
					header('refresh: 0; url = searchbook.php');
				}
				else{
					echo 'Product Id'.'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.
					'Product Name'.'<br><br>';
					while($row = mysql_fetch_assoc($query_run)){
						if($row['total']>0){
							if($row['book_id']<10){
							echo $row['book_id'].'&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.
							$row['book_name'].'<br><br>';
							}
							else{
								echo $row['book_id'].'&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.
							$row['book_name'].'<br><br>';
							}
								
						}
					}
					?>
					<br>
					Enter the id of the product to be issued: <br><br>
					<form action = "issue.php" method = "POST">
						Product Id: &nbsp; <input type="number" name="id" placeholder="e.g: 2" /><br><br>
						<input type="submit" name="submit" value="Issue" />
					</form>
					<?php
				}
			}
			else{
				echo "<script>alert('Products cannot be viewed at this time.');</script>";
				header('refresh: 0; url = searchbook.php');
			}
		}
		else if(isset($_POST['search2']) && isset($_POST['submit2']) && !empty($_POST['search2']) && !empty($_POST['submit2'])){
			$dept = test_input(strtolower($_POST['search2']));
			$_SESSION['dept'] = $dept;
			if($dept == 'sports' || $dept == 'cultural' || $dept == 'technical' || $dept == 'ece' || $dept == 'ce' || $dept == 'mme'){
				$query = "SELECT `book_id`, `book_name`, `book_dept`, `total`, `fine` FROM `book` WHERE `book_dept` = '$dept'";
				if($query_run = mysql_query($query)){
					$num_rows = mysql_num_rows($query_run);
					if($num_rows==0){
						echo "<script>alert('There are no products of this type.');</script>";
						header('refresh: 0; url = searchbook.php');
					}
					else{
						echo 'Book Id'.'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.
						'Book Name'.'<br><br>';
							while($row = mysql_fetch_assoc($query_run)){
							if($row['total']>0){
								echo $row['book_id'].'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;'.
								$row['book_name'].'<br><br>';
							}
						}
						?>
						<br>
						Enter the id of the product to be issued: <br><br>
						<form action = "issue.php" method = "POST">
							Product Id: &nbsp; <input type="number" name="id" placeholder="e.g: 2" /><br><br>
							<input type="submit" name="submit" value="Issue" />
						</form>
						<?php
					}
				}
				else{
					echo "<script>alert('Products cannot be viewed at this time.');</script>";
					header('refresh: 0; url = searchbook.php');
				}
			}
			else{
				echo "<script>alert('Invalid Type.');</script>";
				header('refresh: 0; url = searchbook.php');
			}
		}
		else if((!empty($_POST['submit1']) && empty($_POST['search1'])) || (!empty($_POST['submit2']) && empty($_POST['search2']))){
			
		}
	
	?>
</div>
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>
</body>
</html>