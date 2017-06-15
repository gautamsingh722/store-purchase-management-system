<?php 
	
	require 'decide_index.php';
	
	if(loggedin()){
		if(isset($_POST['id'])){
			$id = $_POST['id'];
			if(empty($id)){
				echo "<script>alert('Fill the product id.');</script>";
				header('refresh: 0; url = searchbook.php');
			}
			else{
				if(isset($_SESSION['book']) && !empty($_SESSION['book'])){
					$book = $_SESSION['book'];
					$query = "SELECT `book_id` FROM `book` WHERE `book_name` LIKE '%$book%'";
					$query_run = mysql_query($query);
					$flag=0;
					while($row = mysql_fetch_assoc($query_run)){
						if($row['book_id'] == $id){
							$flag = 1; break;
						}
					}
					$roll = $_SESSION['roll'];
					$query = "SELECT `issued` FROM `student` WHERE `roll` = '$roll'";
					$query_run = mysql_query($query);
					$result = mysql_result($query_run,0,'issued');
					if($result==2)
						$flag=2;
					if($flag==1){
						$query = "SELECT `total` FROM `book` WHERE `book_id` = '$id'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'total');
						if($result==0){
							$query = "DELETE FROM `book` WHERE `book_id` = '$id'";
							$query_run = mysql_query($query);
						}
						else{
							$result = $result - 1;
							if($result==0){
								$query = "DELETE FROM `book` WHERE `book_id` = '$id'";
								$query_run = mysql_query($query);
							}
							else{
								$query = "UPDATE `book` SET `total` = '$result' WHERE `book_id` = '$id'";
								$query_run = mysql_query($query);
							}
						}
						
						$query = "SELECT `book1` FROM `book_issue` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'book1');
						if($result==0){
							$query = "UPDATE `book_issue` SET `book1` = '$id' WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							$date = date("Y-m-d");
							$query = "UPDATE `book_issue` SET `idate1` = '$date' WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
						}
						else{
							$query = "SELECT `book2` FROM `book_issue` WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							$result = mysql_result($query_run,0,'book2');
							if($result==0){
								$query = "UPDATE `book_issue` SET `book2` = '$id' WHERE `roll` = '$roll'";
								$query_run = mysql_query($query);
								$date = date("Y-m-d");
								$query = "UPDATE `book_issue` SET `idate2` = '$date' WHERE `roll` = '$roll'";
								$query_run = mysql_query($query);
							}
							else{
								echo "<script>alert('You have already issued 2 products, please return previous ones to issue.');</script>";
								header('refresh: 0; url = searchbook.php');
							}
						}
						
						$query = "SELECT `issued` FROM `student` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'issued');
						$result = $result + 1;
						$query = "UPDATE `student` SET `issued` = '$result' WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$query = "SELECT `fine` FROM `book` WHERE `book_id` = '$id'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'fine');
						echo "<script>alert('The product has been issued. It should be returned within 90 days.');</script>";
						header('refresh: 0; url = search.php');
					}
					else if($flag==0){
						echo "<script>alert('Invalid product Id.');</script>";
						header('refresh: 0; url = searchbook.php');
					}
					else if($flag==2){
						echo "<script>alert('You have already issued 2 products, please return previous ones to issue.');</script>";
						header('refresh: 0; url = searchbook.php');
					}
				}
				else if(isset($_SESSION['dept']) && !empty($_SESSION['dept'])){
					$dept = $_SESSION['dept'];
					$query = "SELECT `book_id` FROM `book` WHERE `book_dept` = '$dept'";
					$query_run = mysql_query($query);
					$flag=0;
					while($row = mysql_fetch_assoc($query_run)){
						if($row['book_id'] == $id){
							$flag = 1; break;
						}
					}
					$roll = $_SESSION['roll'];
					$query = "SELECT `issued` FROM `student` WHERE `roll` = '$roll'";
					$query_run = mysql_query($query);
					$result = mysql_result($query_run,0,'issued');
					if($result==2)
						$flag=2;
					if($flag==1){
						$query = "SELECT `total` FROM `book` WHERE `book_id` = '$id'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'total');
						if($result!=0){
							$result = $result - 1;
							$query = "UPDATE `book` SET `total` = '$result' WHERE `book_id` = '$id'";
							$query_run = mysql_query($query);
						}
						
						$query = "SELECT `book1` FROM `book_issue` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'book1');
						if($result==0){
							$query = "UPDATE `book_issue` SET `book1` = '$id' WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							$date = date("Y-m-d");
							$query = "UPDATE `book_issue` SET `idate1` = '$date' WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
						}
						else{
							$query = "SELECT `book2` FROM `book_issue` WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							$result = mysql_result($query_run,0,'book2');
							if($result==0){
								$query = "UPDATE `book_issue` SET `book2` = '$id' WHERE `roll` = '$roll'";
								$query_run = mysql_query($query);
								$date = date("Y-m-d");
								$query = "UPDATE `book_issue` SET `idate2` = '$date' WHERE `roll` = '$roll'";
								$query_run = mysql_query($query);
							}
							else{
								echo "<script>alert('You have already issued 2 products.');</script>";
								header('refresh: 0; url = searchbook.php');
							}
						}
						
						$query = "SELECT `issued` FROM `student` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'issued');
						$result = $result + 1;
						$query = "UPDATE `student` SET `issued` = '$result' WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$query = "SELECT `fine` FROM `book` WHERE `book_id` = '$id'";
						$query_run = mysql_query($query);
						$result = mysql_result($query_run,0,'fine');
						echo "<script>alert('The product has been issued. It should be returned within 90 days.');</script>";
						header('refresh: 0; url = search.php');
					}
					else if($flag==0){
						echo "<script>alert('Invalid product Id.');</script>";
						header('refresh: 0; url = searchbook.php');
					}
					else if($flag==2){
						echo "<script>alert('You have already issued 2 products.');</script>";
						header('refresh: 0; url = searchbook.php');
					}
				}
			}
		}
	}
	else{
		echo "<script>alert('You need to be logged in as member.');</script>";
		header('refresh: 0; url = index.php');
	}

?>